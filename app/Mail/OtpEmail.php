<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $otp;
    public $token;

    /**
    * Create a new message instance.
    */
    public function __construct($user, $otp, $token)
    {
        $this->user = $user;
        $this->otp = $otp;
        $this->token = $token;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Email Verification - Werex OilCom') ->view('emails.verify-email')   // 👈 this points to your template
        ->with(['otp' => $this->otp]); // 👈 pass the OTP to the blade
    }
}
