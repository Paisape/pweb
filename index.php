<?php
\ = \['REQUEST_URI'];
\ = parse_url(\, PHP_URL_PATH);
\ = ltrim(\, '/');
\ = __DIR__ . '/';

if (\ === '' || \ === 'index' || \ === 'index.html') {
    include \ . 'index.html';
    exit;
}

\ = \ . \ . '.html';
if (file_exists(\)) {
    include \;
    exit;
}

\ = \ . \ . '.php';
if (file_exists(\)) {
    include \;
    exit;
}

header("HTTP/1.0 200 OK");
echo "DEBUG MODE: File not found. Request: " . \ . " | Path: " . \ . " | Searched for: " . \ . " | Exists? " . (file_exists(\) ? 'Yes' : 'No');
?>
