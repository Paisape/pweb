<?php
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

// Remove leading slash
$path = ltrim($path, '/');

// Default home page
if ($path === '' || $path === 'index' || $path === 'index.html') {
    include 'index.html';
    exit;
}

// Check if an HTML file exists with that name
$html_file = $path . '.html';
if (file_exists($html_file)) {
    include $html_file;
    exit;
}

// Check if a PHP file exists with that name
$php_file = $path . '.php';
if (file_exists($php_file)) {
    include $php_file;
    exit;
}

// Return 404 for anything else
header("HTTP/1.0 404 Not Found");
echo "404 Page Not Found";
?>
