<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset | Werex OilCom</title>
</head>
<body style="margin:0; padding:0; font-family:'Segoe UI', Arial, sans-serif; background-color:#f4f7fb; color:#333;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1); overflow:hidden;">

                    <!-- Logo only at the top -->
                    <tr>
                        <td align="center" style="padding:30px 0 10px 0;">
                            <img src="https://i.imgur.com/your-logo.png" alt="Werex OilCom Logo" width="120">
                        </td>
                    </tr>

                    <!-- Body content -->
                    <tr>
                        <td style="padding:30px;">
                            <h2 style="color:#0056b3; text-align:center; margin-bottom:20px;">Reset Your Password</h2>

                            <p style="font-size:16px; line-height:1.6;">Hello {{ $user->name ?? 'there' }},</p>
                            <p style="font-size:16px; line-height:1.6;">
                                We received a request to reset your password for your
                                <strong>Werex OilCom</strong> account.
                                Click the button below to continue.
                            </p>

                            <div style="text-align:center; margin:35px 0;">
                                <a href="{{ $url }}"
                                   style="background-color:#007bff; color:#ffffff; font-weight:bold; padding:14px 30px; border-radius:6px; text-decoration:none; display:inline-block;">
                                   Reset Password
                                </a>
                            </div>

                            <p style="font-size:15px; line-height:1.6;">
                                If you didn’t request a password reset, please ignore this message.
                            </p>
                            <p style="font-size:15px; line-height:1.6;">
                                For your security, this link will expire in 60 minutes.
                            </p>

                            <hr style="margin:30px 0; border:none; border-top:1px solid #e0e0e0;">

                            <p style="font-size:13px; text-align:center; color:#777;">
                                Need help? Contact us at
                                <a href="mailto:support@werexoilcom.com" style="color:#007bff; text-decoration:none;">support@werexoilcom.com</a>
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background:#f8f9fa; padding:15px;">
                            <p style="font-size:12px; color:#777; margin:0;">
                                &copy; {{ date('Y') }} <strong>Werex OilCom</strong> — Mafuta ya Kupikia Majumbani<br>
                                All rights reserved.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
