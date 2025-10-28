<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Client Inquiry - Werex OilCom</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #f7f8fa 0%, #e9ecef 100%);
            margin: 0;
            padding: 40px 0;
        }
        .email-container {
            background: #ffffff;
            max-width: 520px;
            margin: 0 auto;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border: 1px solid #e1e5e9;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 20px;
            margin-bottom: 25px;
        }
        .header img {
            width: 90px;
            height: auto;
            margin-bottom: 12px;
        }
        .brand-title {
            color: #0d6efd;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 6px;
            letter-spacing: 0.5px;
        }
        .tagline {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 0;
            font-weight: 500;
        }
        .message-box {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border: 1px solid #e1e5e9;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            line-height: 1.6;
            font-size: 14px;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
        }
        .info-card {
            background: linear-gradient(135deg, #e7f1ff 0%, #d4e6ff 100%);
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #b8d4fe;
        }
        .field-label {
            font-weight: 700;
            color: #0d6efd;
            display: inline-block;
            width: 90px;
            font-size: 14px;
        }
        .field-value {
            color: #2c3e50;
            font-weight: 500;
        }
        .footer {
            text-align: center;
            font-size: 13px;
            color: #6c757d;
            margin-top: 35px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }
        .footer a {
            color: #0d6efd;
            text-decoration: none;
            font-weight: 500;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .urgent-badge {
            background: linear-gradient(135deg, #ffc107 0%, #ffb300 100%);
            color: #000;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(255, 193, 7, 0.3);
        }
        .action-box {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border: 1px solid #ffd966;
            border-radius: 8px;
            padding: 18px;
            margin: 25px 0;
            position: relative;
        }
        .action-box:before {
            content: "💡";
            position: absolute;
            left: 15px;
            top: 15px;
            font-size: 18px;
        }
        .action-content {
            margin-left: 35px;
        }
        .reply-button {
            display: inline-block;
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: white;
            padding: 12px 25px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            margin: 10px 5px 0 0;
            box-shadow: 0 2px 8px rgba(13, 110, 253, 0.3);
        }
        .reply-button:hover {
            background: linear-gradient(135deg, #0a58ca 0%, #084298 100%);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.4);
        }
        .client-info {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
            border-left: 4px solid #0d6efd;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            {{-- Werex logo --}}
            <img src="{{ asset('images/logo.png') }}" alt="Werex OilCom Logo">
            <div class="brand-title">WEREX OILCOM</div>
            <div class="tagline">Premium Energy Solutions for Tomorrow</div>
        </div>

        <div class="urgent-badge">🚀 NEW CLIENT INQUIRY RECEIVED</div>

        <p style="font-size: 15px; color: #2c3e50; line-height: 1.6;">
            <strong>Hello Werex OilCom Team,</strong>
        </p>

        <p style="color: #495057; line-height: 1.6;">
            A potential client has reached out through our website contact form. This represents a new business opportunity for Werex OilCom.
        </p>

        <div class="info-card">
            <div style="margin-bottom: 12px;">
                <span class="field-label">Client:</span>
                <span class="field-value">{{ $name }}</span>
            </div>
            <div style="margin-bottom: 12px;">
                <span class="field-label">Email:</span>
                <span class="field-value">{{ $email }}</span>
            </div>
            <div>
                <span class="field-label">Received:</span>
                <span class="field-value">{{ now()->format('l, F j, Y \a\t g:i A') }}</span>
            </div>
        </div>

        <div class="client-info">
            <strong style="color: #0d6efd; display: block; margin-bottom: 10px;">📋 Client Message:</strong>
            <div class="message-box">
                "{{ $userMessage }}"
            </div>
        </div>

        <div class="action-box">
            <div class="action-content">
                <strong style="color: #856404; display: block; margin-bottom: 8px;">🎯 ACTION REQUIRED</strong>
                <p style="margin: 0; color: #856404; font-size: 14px; line-height: 1.5;">
                    Please respond to this inquiry within <strong>24 hours</strong> to maintain our premium customer service standards and convert this lead.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin: 25px 0;">
            <p style="color: #495057; margin-bottom: 15px; font-weight: 500;">Quick Response Options:</p>
            <a href="mailto:{{ $email }}?subject=Re: Your Werex OilCom Inquiry&body=Dear {{ $name }},%0D%0A%0D%0AThank you for contacting Werex OilCom..."
               class="reply-button">
               📧 Reply to Client
            </a>
            <a href="mailto:{{ $email }}" class="reply-button" style="background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%);">
               ✉️ Simple Reply
            </a>
        </div>

        <p style="color: #495057; line-height: 1.6; font-size: 14px;">
            <strong>Client Contact:</strong>
            <a href="mailto:{{ $email }}" style="color: #0d6efd; text-decoration: none; font-weight: 500;">{{ $email }}</a>
        </p>

        <p style="color: #495057; line-height: 1.6; margin-top: 25px;">
            Best regards,<br>
            <strong style="color: #0d6efd;">Werex OilCom Management Team</strong>
        </p>

        <div class="footer">
            <p style="margin: 5px 0;">© {{ date('Y') }} Werex OilCom Limited. All rights reserved.</p>
            <p style="margin: 5px 0;">
                <a href="{{ url('/') }}">Visit Our Website</a> |
                <a href="mailto:info@werexoilcom.co.tz">Contact Support</a> |
                <a href="tel:+255123456789">+255 123 456 789</a>
            </p>
            <p style="margin: 5px 0; font-size: 12px; color: #868e96;">
                Transforming Energy Solutions Across Tanzania
            </p>
        </div>
    </div>
</body>
</html>
