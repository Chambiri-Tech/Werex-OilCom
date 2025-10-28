@extends('layouts.guest')

@section('title', 'Email Verification - Werex OilCom')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            {{-- Email Verification Card --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Verify Your Email</h4>
                </div>
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                        <h5>Check Your Email</h5>
                    </div>

                    <p class="mb-4">
                        We've sent a verification link to your email address.
                        Please check your inbox and click the link to verify your account.
                    </p>

                    {{-- Success / Error Messages --}}
                    @if(session('success'))
                        <div class="alert alert-success alert-mini alert-auto-dismiss">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger alert-mini alert-auto-dismiss">{{ $errors->first() }}</div>
                    @endif
                </div>
            </div>

            {{-- OTP Verification Card --}}

                <h4 class="text-center mb-3 fw-bold">OTP Verification</h4>
                <p class="text-center text-muted">Enter the 6-digit OTP sent to your email.</p>

                {{-- OTP Form --}}
                <form method="POST" action="{{ route('otp.verify') }}">
                    @csrf
                    <input type="hidden" name="email" value="{{ session('email') ?? old('email') }}">

                    <div class="mb-3">
                        <input type="text" name="otp" class="form-control text-center" placeholder="Enter 6-digit code" maxlength="6" required>
                        @error('otp')
                            <div class="text-danger small mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn w-100 fw-semibold" style="background-color:#ff8c00; border:none; color:#fff;">
                        Verify OTP
                    </button>
                </form>

                {{-- Resend OTP --}}
                <form method="POST" action="{{ route('otp.resend') }}" class="text-center mt-3">
                    @csrf
                    <input type="hidden" name="email" value="{{ session('email') ?? old('email') }}">
                    <button type="submit" class="btn btn-link text-decoration-none fw-semibold">Resend OTP</button>
                </form>

                {{-- Countdown --}}
                <p class="text-center text-muted small mt-2" id="timer">10:00 remaining</p>
            </div>
        </div>
    </div>
</div>

<style>
.alert-mini {
    padding: 8px 12px;
    font-size: 0.85rem;
    margin-bottom: 10px;
    border-radius: 6px;
    opacity: 0.85;
    border: none;
}

.alert-success.alert-mini {
    background-color: rgba(25, 135, 84, 0.1);
    color: #0f5132;
    border-left: 3px solid #198754;
}

.alert-danger.alert-mini {
    background-color: rgba(220, 53, 69, 0.1);
    color: #721c24;
    border-left: 3px solid #dc3545;
}
</style>

<script>
    let time = 10 * 60;
    const timer = document.getElementById('timer');

    if (timer) {
        setInterval(() => {
            let minutes = Math.floor(time / 60);
            let seconds = time % 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            timer.textContent = `${minutes}:${seconds} remaining`;
            if (time > 0) time--;
        }, 1000);
    }

    document.addEventListener('DOMContentLoaded', function() {
        const alerts = document.querySelectorAll('.alert-auto-dismiss');

        alerts.forEach(function(alert) {
            setTimeout(function() {
                alert.style.transition = 'all 0.6s ease';
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-10px)';
                alert.style.margin = '0';
                alert.style.padding = '0';
                alert.style.height = '0';
                alert.style.overflow = 'hidden';

                setTimeout(function() {
                    if (alert.parentNode) {
                        alert.remove();
                    }
                }, 600);
            }, 3000);
        });
    });
</script>
@endsection
