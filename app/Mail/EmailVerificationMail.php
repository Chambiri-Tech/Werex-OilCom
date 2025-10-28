<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token;
    public $otp;

    public function __construct($user, $token, $otp)
    {
        $this->user = $user;
        $this->token = $token;
        $this->otp = $otp;
    }

    public function build()
    {
        return $this->subject('Email Verification - Werex OilCom')
                    ->view('emails.verify-email');
    }
}
