<?php
$request = $_SERVER['REQUEST_URI'];
// Strip query parameters for the path
$path = parse_url($request, PHP_URL_PATH);

// Remove leading slash
$path = ltrim($path, '/');

$base_dir = __DIR__ . '/';

// Default home page
if ($path === '' || $path === 'index' || $path === 'index.html') {
    include $base_dir . 'index.html';
    exit;
}

// Check if an HTML file exists with that name
$html_file = $base_dir . $path . '.html';
if (file_exists($html_file)) {
    include $html_file;
    exit;
}

// Check if a PHP file exists with that name
$php_file = $base_dir . $path . '.php';
if (file_exists($php_file)) {
    include $php_file;
    exit;
}

// Check if the requested path exactly matches an existing file (e.g. for fallback)
$exact_file = $base_dir . $path;
if (file_exists($exact_file) && !is_dir($exact_file)) {
    $mime = mime_content_type($exact_file);
    if ($mime) header("Content-Type: $mime");
    readfile($exact_file);
    exit;
}

// Return 404 for anything else
header("HTTP/1.0 404 Not Found");
echo "404 Page Not Found";
?>
