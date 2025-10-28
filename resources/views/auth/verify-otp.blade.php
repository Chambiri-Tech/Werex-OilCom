@extends('layouts.app')

@section('title', 'Email Verification - Werex OilCom')

@section('content')
<div class="container py-5" style="background-color: #f7f8fa; min-height: 90vh;">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            {{-- Verification Card --}}
            <div class="card border-0 shadow-sm p-4" style="border-radius: 12px;">
                <h4 class="text-center mb-3 fw-bold">Email Verification</h4>
                <p class="text-center text-muted">Enter the 6-digit OTP sent to your email.</p>

                {{-- OTP Form --}}
                <form method="POST" action="{{ route('otp.verify') }}">
                    @csrf
                    <input type="hidden" name="email" value="{{ session('email') ?? old('email') }}">

                    <div class="mb-3">
                        <input type="text" name="otp" class="form-control text-center" placeholder=" 6-digit code" maxlength="6" required>
                        @error('otp')
                            <div class="text-danger small mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn w-100 fw-semibold" style="background-color:#ffcc00; border:none; color:#000;">
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

                {{-- Success / Error Messages --}}
                @if(session('success'))
                    <div class="alert alert-success text-center mt-2">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger text-center mt-2">{{ $errors->first() }}</div>
                @endif
            </div>

            {{-- Footer --}}
            <div class="text-center mt-4">
                <a href="{{ route('home') }}" class="btn btn-outline-dark px-4 rounded-pill">Home</a>
            </div>

        </div>
    </div>
</div>

{{-- Countdown Script --}}
<script>
    let time = 10 * 60;
    const timer = document.getElementById('timer');
    setInterval(() => {
        let minutes = Math.floor(time / 60);
        let seconds = time % 60;
        seconds = seconds < 10 ? '0' + seconds : seconds;
        timer.textContent = `${minutes}:${seconds} remaining`;
        if (time > 0) time--;
    }, 1000);
</script>
@endsection
