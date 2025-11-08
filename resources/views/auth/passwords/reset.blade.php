@extends('layouts.app')

@section('title', 'Set New Password - Werex OilCom')

@section('content')
<style>
    .password-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        margin: 2rem 0;
    }
    .btn-werex {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        border: none;
        color: white;
    }
    .btn-werex:hover {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        color: white;
    }
    .password-strength {
        height: 5px;
        border-radius: 5px;
        margin-top: 5px;
    }
    .alert-auto-fade {
        animation: fadeOut 5s forwards;
    }
    @keyframes fadeOut {
        0% { opacity: 1; }
        70% { opacity: 1; }
        100% { opacity: 0; display: none; }
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card password-card">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="card-title fw-bold text-primary">Werex OilCom</h2>
                        <p class="text-muted">Set New Password</p>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success alert-auto-fade" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ $email ?? old('email') }}"
                                   required
                                   autocomplete="email"
                                   autofocus
                                   readonly>

                            @error('email')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password"
                                   required
                                   autocomplete="new-password"
                                   placeholder="Enter new password">

                            <div class="password-strength" id="passwordStrength"></div>

                            @error('password')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <small class="form-text text-muted">
                                Password must be at least 8 characters with uppercase, lowercase, and number.
                            </small>
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="form-label">Confirm Password</label>
                            <input id="password-confirm" type="password"
                                   class="form-control"
                                   name="password_confirmation"
                                   required
                                   autocomplete="new-password"
                                   placeholder="Confirm new password">
                            <div class="mt-1" id="passwordMatch"></div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-werex btn-lg" id="resetButton">
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('password').addEventListener('input', function() {
        const password = this.value;
        const strengthBar = document.getElementById('passwordStrength');
        let strength = 0;

        if (password.length >= 8) strength += 25;
        if (/[A-Z]/.test(password)) strength += 25;
        if (/[a-z]/.test(password)) strength += 25;
        if (/[0-9]/.test(password)) strength += 25;

        strengthBar.style.width = strength + '%';
        if (strength < 50) {
            strengthBar.style.backgroundColor = '#dc3545';
        } else if (strength < 75) {
            strengthBar.style.backgroundColor = '#ffc107';
        } else {
            strengthBar.style.backgroundColor = '#28a745';
        }
    });

    document.getElementById('password-confirm').addEventListener('input', function() {
        const password = document.getElementById('password').value;
        const confirmPassword = this.value;
        const matchIndicator = document.getElementById('passwordMatch');

        if (confirmPassword === '') {
            matchIndicator.innerHTML = '';
        } else if (password === confirmPassword) {
            matchIndicator.innerHTML = '<small class="text-success">✓ Passwords match</small>';
        } else {
            matchIndicator.innerHTML = '<small class="text-danger">✗ Passwords do not match</small>';
        }
    });

    // Auto-fade success message after 5 seconds
    document.addEventListener('DOMContentLoaded', function() {
        const alert = document.querySelector('.alert-auto-fade');
        if (alert) {
            setTimeout(() => {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 500);
            }, 5000);
        }
    });
</script>
@endsection
