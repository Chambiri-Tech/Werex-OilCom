<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpEmail;
use Illuminate\Support\Str;


class OTPController extends Controller
{
    // Show OTP form
    public function showOtpForm()
    {
        return view('auth.verify-email', [
            'email' => session('email'), // Keep email in session
        ]);
    }

    // Verify OTP
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|digits:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        if ($user->otp != $request->otp) {
            return back()->with('error', 'Invalid OTP.');
        }

        // Check if OTP expired (10 minutes)
        if (now()->diffInMinutes($user->otp_created_at) > 10) {
            return back()->with('error', 'OTP expired. Please request a new one.');
        }

        // Mark user verified
        $user->is_verified = true;
        $user->email_verified_at = now();
        $user->otp = null;
        $user->otp_created_at = null;
        $user->save();

        // Clear session email
        session()->forget('email');

        // Redirect to login with success message
        return redirect()->route('login')->with('success', 'Email verified successfully! Please log in.');
    }

    // Resend OTP
    public function resendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        // Generate new OTP
        $otp = rand(100000, 999999);
        $token = Str::random(12);

        $user->otp = $otp;
        $user->otp_created_at = now(); // reset creation time
        $user->email_verification_token = $token;
        $user->save();

        // Send OTP email
        Mail::to($user->email)->send(new OtpEmail($user,$otp,$token));

        return back()->with('success', 'A new OTP has been sent to your email!');
    }
}
