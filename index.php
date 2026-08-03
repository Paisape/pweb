<?php
// Get the requested URL
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// Remove leading/trailing slashes
$path = trim($path, '/');

// If empty, serve index.html
if ($path === '' || $path === 'index' || $path === 'index.html') {
    if (file_exists('index.html')) {
        include 'index.html';
        exit;
    }
}

// Check if an HTML file exists for this path
if ($path !== '') {
    $html_file = $path . '.html';
    
    // Check current directory
    if (file_exists(__DIR__ . '/' . $html_file)) {
        include __DIR__ . '/' . $html_file;
        exit;
    }
    
    // Fallback without __DIR__
    if (file_exists($html_file)) {
        include $html_file;
        exit;
    }
}

// If we reach here, output a friendly fallback or 404
header("HTTP/1.1 404 Not Found");
echo "<!DOCTYPE html><html><head><title>Page Not Found</title></head><body style='font-family:sans-serif; text-align:center; padding:50px;'>";
echo "<h2>404 - Page Not Found</h2>";
echo "<p>The requested page <strong>/" . htmlspecialchars($path) . "</strong> could not be found.</p>";
echo "<p><a href='/'>Return to Home</a></p>";
echo "</body></html>";
?>
