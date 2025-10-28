<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Werex OilCom Management System</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
<style>
:root {
    --accent-color: #10B981;
    --panel-overlay-left: rgba(14,165,233,0.2);
    --panel-overlay-right: rgba(245,158,11,0.2);
}

body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Segoe UI', sans-serif;
    display: flex;
    flex-direction: column;
    background: #F3F4F6;
}

.login-wrapper {
    display: flex;
    flex: 1;
    min-height: calc(100vh - 60px);
    position: relative;
}

.login-left {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 60px;
    text-align: left;
    position: relative;
    background: transparent;
}

.login-left::before {
    content: "";
    position: absolute;
    top: 0; left: 0; bottom: 0; right: 0;
    background: var(--panel-overlay-left);
    clip-path: ellipse(80% 100% at 50% 50%);
    z-index: 0;
}

.login-left h1, .login-left p, .login-left i, .login-left .features {
    position: relative;
    z-index: 1;
    color: #0F172A;
}

.login-left h1 { font-size: 3rem; font-weight: 700; margin-bottom: 20px; }
.login-left p { font-size: 1.2rem; line-height: 1.5; margin-bottom: 30px; }

.features p {
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 10px;
    opacity: 0;
    animation: fadeInUp 0.8s forwards;
}

.features p:nth-child(1) { animation-delay: 0.2s; }
.features p:nth-child(2) { animation-delay: 0.4s; }
.features p:nth-child(3) { animation-delay: 0.6s; }
.features p:nth-child(4) { animation-delay: 0.8s; }

@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}

@keyframes float {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.login-right {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px;
    position: relative;
    background: transparent;
}

.login-right::before {
    content: "";
    position: absolute;
    top: 0; left: 0; bottom: 0; right: 0;
    background: var(--panel-overlay-right);
    clip-path: ellipse(80% 100% at 50% 50%);
    z-index: 0;
}

.login-card {
    position: relative;
    z-index: 1;
    backdrop-filter: blur(12px);
    background: rgba(255,255,255,0.2);
    border-radius: 25px;
    padding: 40px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    color: #1F2937;
}

.login-card h2 {
    text-align: center;
    font-weight: 700;
    margin-bottom: 35px;
}

.form-control {
    background: rgba(255,255,255,0.4);
    border: none;
    color: #1F2937;
}

.form-control::placeholder { color: rgba(31,41,55,0.6); }
.form-control:focus {
    background: rgba(255,255,255,0.5);
    box-shadow: 0 0 8px var(--accent-color);
    color: #1F2937;
}

.btn-primary {
    background: var(--accent-color);
    border: none;
    width: 100%;
    padding: 12px;
    font-weight: 600;
    color: white;
    transition: 0.3s;
}
.btn-primary:hover { background: #059669; }

.form-text { color: #EF4444; }

.login-footer { text-align: center; margin-top: 20px; }
.login-footer a { color: #1F2937; text-decoration: underline; }

footer {
    height: 60px;
    background: rgba(0,0,0,0.05);
    text-align: center;
    line-height: 60px;
    font-weight: 500;
    color: #1F2937;
}

@media(max-width: 991px){
    .login-wrapper { flex-direction: column; }
    .login-left, .login-right { flex: unset; width: 100%; padding: 40px; text-align: center; align-items: center; }
    .features p { text-align: center; }
}
</style>
</head>
<body>

<div class="login-wrapper">
    <!-- Left Panel -->
    <div class="login-left">
        <h1>Welcome to Werex OilCom</h1>
        <p>Access your dashboard and track your activities easily and securely.</p>

        <div class="features mt-4">
            <p><i class="fas fa-check-circle me-2"></i><strong>Easy Access</strong> — Login quickly and start managing your activities.</p>
            <p><i class="fas fa-shield-alt me-2"></i><strong>Secure</strong> — Your account and data are safe with us.</p>
            <p><i class="fas fa-chart-line me-2"></i><strong>Track Performance</strong> — Keep your tasks in check.</p>
            <p><i class="fas fa-headset me-2"></i><strong>Support</strong> — Assistance available whenever you need it.</p>
        </div>
    </div>

    <!-- Right Panel -->
    <div class="login-right">
        <div class="login-card">
            <!-- Logo -->
            <div class="text-center mb-3">
                <img src="{{ asset('images/logo.png') }}" alt="Werex OilCom Logo" style="height: 60px;">
            </div>

            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email') <div class="form-text">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                    @error('password') <div class="form-text">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3 form-check text-dark">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Login</button>
            </form>
            <div class="login-footer">
                <p>Don't have an account? <a href="{{ route('register') }}">Register Here</a></p>
                <p><a href="#">Forgot Password?</a></p>
            </div>
        </div>
    </div>
</div>

<footer>
    &copy; 2025 Werex OilCom. All Rights Reserved. | <a href="#">Developed By Chambiri- Tech</a>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
