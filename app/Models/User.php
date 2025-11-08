<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\CustomResetPassword;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'otp',
        'otp_created_at',
        'email_verification_token',
        'is_verified',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'otp',
        'email_verification_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'otp_created_at' => 'datetime',
        'is_verified' => 'boolean',
    ];

    /**
     * Send password reset notification
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPassword($token));
    }
}
