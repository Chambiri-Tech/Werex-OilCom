<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpEmail;

class AuthController extends Controller
{
    // Show registration form
    public function showRegister()
    {
        return view('register');
    }

    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed',
        ]);

        $otp = rand(100000,999999);
        $token = Str::random(12);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'otp'=>$otp,
            'otp_created_at'=>now(),
            'email_verification_token'=>$token,
            'is_verified'=>false,
        ]);

        // Send OTP + verification email
        Mail::to($user->email)->send(new OtpEmail($user, $otp, $token));

        session(['email'=>$user->email]);

        return redirect()->route('otp.verify.form')
            ->with('success','Registration successful! Check email for OTP & verification link.');
    }

    // Show OTP form
    public function showOtpForm()
    {
        return view('auth.otp');
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

        if (!$user->otp || !$user->otp_created_at) {
            return back()->with('error', 'No OTP found. Please request a new one.');
        }

        if ($user->otp_created_at->diffInMinutes(now()) > 10) {
            // Generate new OTP
            $otp = rand(100000, 999999);
            $token = Str::random(12);
            $user->otp = $otp;
            $user->otp_created_at = now();
            $user->email_verification_token = $token;
            $user->save();

            Mail::to($user->email)->send(new OtpEmail($user, $otp, $token));

            return back()->with('error', 'OTP expired. A new OTP has been sent to your email.');
        }

        if ($request->otp != $user->otp) {
            return back()->with('error', 'Invalid OTP.');
        }

        // Mark user as verified
        $user->is_verified = true;
        $user->email_verified_at = now();
        $user->otp = null;
        $user->otp_created_at = null;
        $user->save();

        return redirect()->route('login')->with('success', 'Email verified successfully! You can now log in.');
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

        $otp = rand(100000, 999999);
        $token = Str::random(12);
        $user->otp = $otp;
        $user->otp_created_at = now();
        $user->email_verification_token = $token;
        $user->save();

        Mail::to($user->email)->send(new OtpEmail($user, $otp, $token));

        return back()->with('success', 'OTP has been resent!');
    }

    // Show login form
    public function showLogin()
    {
        return view('login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            if (!$user->is_verified) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()->intended('/dashboard');
            }

            // Email verified → redirect to intended dashboard
            return redirect()->intended('/dashboard')
                ->with('success', 'Login successful!');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
