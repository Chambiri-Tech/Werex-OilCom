<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Werex OilCom Email Verification</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #f0f8ff 0%, #e6f3ff 100%);
            margin: 0;
            padding: 40px 0;
        }
        .email-container {
            background: #ffffff;
            max-width: 480px;
            margin: 0 auto;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(255, 107, 0, 0.1);
            border: 1px solid #e1f0ff;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #ff6b00;
            padding-bottom: 20px;
            margin-bottom: 25px;
        }
        .header img {
            width: 100px;
            height: auto;
            margin-bottom: 12px;
        }
        .brand-title {
            color: #0066cc;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 6px;
            letter-spacing: 0.5px;
        }
        .tagline {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
            font-weight: 500;
        }
        .otp {
            background: linear-gradient(135deg, #ff6b00 0%, #ff8c42 100%);
            color: #fff;
            display: inline-block;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 6px;
            margin: 20px 0;
            padding: 14px 28px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(255, 107, 0, 0.3);
            border: 2px solid #e55a00;
        }
        .verify-link {
            display: inline-block;
            margin: 20px 0;
            padding: 14px 30px;
            background: linear-gradient(135deg, #0066cc 0%, #0088ff 100%);
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.3);
            transition: all 0.3s ease;
        }
        .verify-link:hover {
            background: linear-gradient(135deg, #0052a3 0%, #0066cc 100%);
            box-shadow: 0 6px 16px rgba(0, 102, 204, 0.4);
            transform: translateY(-2px);
        }
        .footer {
            text-align: center;
            font-size: 13px;
            color: #666;
            margin-top: 35px;
            padding-top: 20px;
            border-top: 1px solid #e6f3ff;
        }
        .footer a {
            color: #0066cc;
            text-decoration: none;
            font-weight: 500;
        }
        .footer a:hover {
            text-decoration: underline;
            color: #ff6b00;
        }
        .info-box {
            background: #fff8f0;
            border-left: 4px solid #ff6b00;
            padding: 15px;
            margin: 20px 0;
            border-radius: 6px;
        }
        .security-notice {
            background: #fff0e6;
            border: 1px solid #ffb380;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            {{-- Werex logo --}}
            <img src="https://i.ibb.co/wNn9h1Fx/ff2f7f17-427a-4ce7-8c03-ca7f7f774996.png" alt="Werexoil" style="display: block; max-width: 200px; height: auto;">
            <div class="brand-title">WEREX OILCOM</div>
            <div class="tagline">The People's Choice</div>
        </div>

        <p style="color: #333; line-height: 1.6;">Hello <strong style="color: #0066cc;">{{ $user->name }}</strong>,</p>
        <p style="color: #555; line-height: 1.6;">
            Thank you for choosing Werex OilCom. To activate your account and access our premium energy solutions, please verify your email address.
        </p>

        <div class="info-box">
            <p style="margin: 0; color: #333; font-weight: 600;">📧 Choose your verification method:</p>
        </div>

        <p style="color: #0066cc; font-weight: 300;">1️⃣ Quick Verification Link:</p>
        <div style="text-align: center;">
            <a href="{{ url('/verify-email/'.$token) }}" class="verify-link">Verify My Email Address</a>
        </div>

        <p style="color: #ff6b00; font-weight: 600;">2️⃣ One-Time Password (OTP):</p>
        <div style="text-align: center;">
            <div class="otp">{{ $otp }}</div>
        </div>

        <div class="security-notice">
            <p style="margin: 0; color: #cc5200; font-size: 13px; text-align: center;">
                ⏰ <strong>Security Notice:</strong> This verification code expires in <strong>10 minutes</strong>
            </p>
        </div>

        <p style="color: #666; font-size: 14px; text-align: center;">
            If you didn't create an account with Werex OilCom, please disregard this email.
        </p>

        <p style="color: #333; line-height: 1.6;">
            Welcome to the Werex OilCom family,<br>
            <strong style="color: #0066cc;">The Werex OilCom Team</strong>
        </p>

        <div class="footer">
            <p style="margin: 5px 0;">© {{ date('Y') }} Werex OilCom Limited. All rights reserved.</p>
            <p style="margin: 5px 0;">
                <a href="{{ url('/') }}">Visit Our Website</a> |
                <a href="mailto:support@werexoilcom.co.tz">Contact Support</a>
            </p>
            <p style="margin: 5px 0; font-size: 12px; color: #888;">
                Powering Progress Through Innovation
            </p>
        </div>
    </div>
</body>
</html>
