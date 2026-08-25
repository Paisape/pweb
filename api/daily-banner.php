<?php
// Microsoft 365 Dynamic Day-Wise Email Banner Router
date_default_timezone_set('Asia/Kolkata');

$requested_day = isset($_GET['day']) ? strtolower(trim($_GET['day'])) : strtolower(date('l'));

$banners_dir = __DIR__ . '/../assets/banners';
$fallback_file = __DIR__ . '/../assets/paisape-email-banner.png';

$target_file = null;
$extensions = ['png', 'jpg', 'jpeg', 'webp', 'gif'];

foreach ($extensions as $ext) {
    $candidate = "{$banners_dir}/{$requested_day}.{$ext}";
    if (file_exists($candidate)) {
        $target_file = $candidate;
        break;
    }
}

if (!$target_file || !file_exists($target_file)) {
    $target_file = $fallback_file;
}

if (!file_exists($target_file)) {
    http_response_code(404);
    echo "Banner image not found.";
    exit;
}

$ext = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$mime_types = [
    'png' => 'image/png',
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'webp' => 'image/webp',
    'gif' => 'image/gif'
];
$mime = $mime_types[$ext] ?? 'image/png';

// Send anti-caching headers so Microsoft Outlook & webmail fetch fresh daily banners
header('Content-Type: ' . $mime);
header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');
header('Content-Length: ' . filesize($target_file));
header('X-Served-Day: ' . ucfirst($requested_day));

readfile($target_file);
exit;
