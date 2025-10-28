@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm p-4 border-0">
                <h3 class="text-center mb-4 text-primary fw-bold">Email Verification</h3>
                <p class="text-center text-muted mb-4">
                    Enter the 6-digit OTP sent to your email.
                </p>

                <!-- Timer -->
                <div class="text-center mb-3">
                    <span id="timer" class="fw-bold text-danger">10:00</span> remaining
                </div>

                <!-- Success/Error Messages -->
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @php
                    // Ensure email is set
                    $email = session('email') ?? old('email');
                @endphp

                <form method="POST" action="{{ route('otp.verify') }}" id="verifyForm">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}">
                    <div class="mb-3">
                        <label for="otp" class="form-label fw-bold">OTP</label>
                        <input type="text" class="form-control" name="otp" id="otp" maxlength="6" required autofocus>
                    </div>
                    <button type="submit" id="verifyBtn" class="btn btn-primary w-100 rounded-pill">Verify OTP</button>
                </form>

                <form method="POST" action="{{ route('otp.resend') }}" class="mt-3 text-center" id="resendForm">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}">
                    <button type="submit" id="resendBtn" class="btn btn-outline-secondary rounded-pill">Resend OTP</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    let timeLeft = 600; // 10 minutes
    const timerEl = document.getElementById('timer');
    const verifyBtn = document.getElementById('verifyBtn');
    const resendBtn = document.getElementById('resendBtn');
    const resendForm = document.getElementById('resendForm');
    let countdown;

    function startTimer() {
        clearInterval(countdown);
        timeLeft = 600;
        verifyBtn.disabled = false;

        countdown = setInterval(() => {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            timerEl.textContent = `${minutes.toString().padStart(2,'0')}:${seconds.toString().padStart(2,'0')}`;
            timeLeft--;

            if(timeLeft < 0) {
                clearInterval(countdown);
                timerEl.textContent = "OTP expired. Please resend.";
                verifyBtn.disabled = true;
            }
        }, 1000);
    }

    startTimer();

    // Enable Resend button immediately
    resendBtn.disabled = false;

    // Reset timer after resend
    resendForm.addEventListener('submit', function(e) {
        setTimeout(() => startTimer(), 100); // small delay to let server process
    });
</script>
@endsection
