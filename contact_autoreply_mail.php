<?php
$auto_reply_message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Received - Paisape</title>
</head>
<body style="font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; background-color: #f7f9fc; margin: 0; padding: 40px 20px;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 8px 24px rgba(0,0,0,0.08);">
        <tr>
            <td style="background-color: #0d1b2a; padding: 40px 30px; text-align: center;">
                <img src="https://paisape.in/assets/paisape-logo.png" alt="Paisape Logo" style="max-height: 50px; width: auto; margin-bottom: 15px;">`n                <h1 style="color: #ffffff; margin: 0; font-size: 28px; font-weight: 800; letter-spacing: 2px;">PAISAPE</h1>
                <p style="color: #a0aec0; margin: 10px 0 0 0; font-size: 14px; letter-spacing: 1px;">INTELLIGENT PAYMENT ROUTING</p>
            </td>
        </tr>
        <tr>
            <td style="padding: 50px 40px;">
                <h2 style="color: #1a202c; margin-top: 0; font-size: 22px;">Hello ' . htmlspecialchars($name) . ',</h2>
                
                <p style="color: #4a5568; line-height: 1.8; font-size: 16px; margin-bottom: 24px;">
                    Thank you for reaching out to us. We have received your request and one of our dedicated team members will contact you soon to assist you further.
                </p>
                
                <div style="background-color: #f1f5f9; border-left: 4px solid #3b82f6; padding: 20px; border-radius: 0 8px 8px 0; margin-bottom: 30px;">
                    <p style="color: #334155; margin: 0; font-size: 15px; font-style: italic;">
                        "At Paisape, we are committed to providing you with the most secure, reliable, and comprehensive payment solutions in India."
                    </p>
                </div>
                
                <p style="color: #4a5568; line-height: 1.8; font-size: 16px; margin-bottom: 30px;">
                    If you have any urgent queries in the meantime, feel free to reply directly to this email or reach out to our support team at <a href="mailto:support@paisape.in" style="color: #3b82f6; text-decoration: none;">support@paisape.in</a>.
                </p>
                
                <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 30px 0;">
                
                <p style="color: #64748b; font-size: 15px; margin: 0; line-height: 1.6;">
                    Warm regards,<br>
                    <strong style="color: #1a202c; font-size: 16px;">The Paisape Team</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #f8fafc; padding: 30px; text-align: center; border-top: 1px solid #e2e8f0;">
                <p style="color: #94a3b8; font-size: 13px; margin: 0 0 10px 0;">
                    &copy; ' . date("Y") . ' Paisape Techfin Private Limited. All rights reserved.
                </p>
                <p style="margin: 0;">
                    <a href="https://paisape.in" style="color: #3b82f6; text-decoration: none; font-size: 13px; font-weight: 600;">Visit our Website</a>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
';
?>

