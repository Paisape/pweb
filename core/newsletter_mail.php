<?php
include_once __DIR__ . '/mail.php';
include_once __DIR__ . '/db.php';

function get_newsletter_template($title, $subtitle, $content, $cta_text = 'Read Full Story', $cta_url = 'https://paisape.in/blog', $unsubscribe_url = '#') {
    return '
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . htmlspecialchars($title) . '</title>
    <style>
        body { margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background-color: #f8fafc; color: #1e293b; }
        .container { max-width: 600px; margin: 30px auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); }
        .header { background-color: #0f172a; padding: 32px 40px; text-align: center; }
        .header img { height: 36px; width: auto; }
        .content { padding: 40px; }
        .tag { display: inline-block; background-color: #e0f2fe; color: #0284c7; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; padding: 4px 12px; border-radius: 9999px; margin-bottom: 16px; }
        .title { font-size: 24px; font-weight: 800; color: #0f172a; margin: 0 0 12px 0; line-height: 1.3; }
        .subtitle { font-size: 15px; color: #64748b; margin: 0 0 24px 0; line-height: 1.6; }
        .body-text { font-size: 15px; color: #334155; line-height: 1.7; margin-bottom: 32px; }
        .btn-wrap { text-align: center; margin: 32px 0; }
        .btn { display: inline-block; background-color: #0066FF; color: #ffffff !important; font-weight: 700; font-size: 15px; padding: 14px 32px; border-radius: 9999px; text-decoration: none; box-shadow: 0 4px 14px rgba(0, 102, 255, 0.3); }
        .footer { background-color: #f1f5f9; padding: 24px 40px; text-align: center; font-size: 12px; color: #94a3b8; border-top: 1px solid #e2e8f0; }
        .footer a { color: #64748b; text-decoration: underline; }
    </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img src="https://paisape.in/assets/logo-white.svg" alt="Paisape">
            </div>
            <div class="content">
                <span class="tag">Paisape Insider Note</span>
                <h1 class="title">' . htmlspecialchars($title) . '</h1>
                ' . ($subtitle ? '<p class="subtitle">' . htmlspecialchars($subtitle) . '</p>' : '') . '
                <div class="body-text">' . $content . '</div>
                ' . ($cta_url ? '
                <div class="btn-wrap">
                    <a href="' . htmlspecialchars($cta_url) . '" class="btn">' . htmlspecialchars($cta_text) . ' &rarr;</a>
                </div>' : '') . '
            </div>
            <div class="footer">
                <p>&copy; ' . date('Y') . ' Paisape Techfin Private Limited. All rights reserved.</p>
                <p>You received this email because you subscribed on <a href="https://paisape.in/">paisape.in</a>.</p>
                <p><a href="' . htmlspecialchars($unsubscribe_url) . '">Unsubscribe from newsletter</a></p>
            </div>
        </div>
    </body>
    </html>
    ';
}

function broadcast_newsletter($subject, $title, $subtitle, $content_html, $cta_text = 'Read Story', $cta_url = 'https://paisape.in/blog') {
    $pdo = getDB();
    $stmt = $pdo->query("SELECT email FROM subscribers WHERE status = 'active'");
    $subscribers = $stmt->fetchAll(PDO::FETCH_COLUMN);

    if (empty($subscribers)) {
        return ['count' => 0, 'status' => 'no_subscribers'];
    }

    $sent_count = 0;
    foreach ($subscribers as $email) {
        $unsub_url = "https://paisape.in/unsubscribe.php?email=" . urlencode($email);
        $html = get_newsletter_template($title, $subtitle, $content_html, $cta_text, $cta_url, $unsub_url);
        if (send_smtp_mail($email, $subject, $html)) {
            $sent_count++;
        }
    }

    return ['count' => $sent_count, 'total' => count($subscribers), 'status' => 'success'];
}
