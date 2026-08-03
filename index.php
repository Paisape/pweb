<?php
$request = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$path = parse_url($request, PHP_URL_PATH);
$path = ltrim($path, '/');
$base_dir = __DIR__ . '/';

if ($path === '' || $path === 'index' || $path === 'index.html') {
    include $base_dir . 'index.html';
    exit;
}

$html_file = $base_dir . $path . '.html';
if (file_exists($html_file)) {
    include $html_file;
    exit;
}

$php_file = $base_dir . $path . '.php';
if (file_exists($php_file)) {
    include $php_file;
    exit;
}

// Check for absolute fallback
if (file_exists($base_dir . $path) && !is_dir($base_dir . $path)) {
    $mime = mime_content_type($base_dir . $path);
    if ($mime) header("Content-Type: $mime");
    readfile($base_dir . $path);
    exit;
}

header("HTTP/1.0 200 OK");
echo "<h2>DEBUG MODE ENABLED</h2>";
echo "<strong>REQUEST_URI:</strong> " . htmlspecialchars($request) . "<br>";
echo "<strong>Parsed path:</strong> " . htmlspecialchars($path) . "<br>";
echo "<strong>Looking for:</strong> " . htmlspecialchars($html_file) . "<br>";
echo "<strong>Does HTML exist?</strong> " . (file_exists($html_file) ? 'YES' : 'NO') . "<br>";
echo "<strong>Current DIR (__DIR__):</strong> " . htmlspecialchars(__DIR__) . "<br>";
echo "<hr><h3>Files in " . htmlspecialchars(__DIR__) . "</h3><ul>";
$files = scandir(__DIR__);
foreach($files as $f) {
    echo "<li>" . htmlspecialchars($f) . "</li>";
}
echo "</ul>";
?>
