<?php
echo "<h1>PHP Debug Info</h1>";
echo "<h2>__DIR__ is: " . __DIR__ . "</h2>";
echo "<h3>Files in __DIR__:</h3><ul>";
$files = scandir(__DIR__);
foreach ($files as $f) {
    echo "<li>$f</li>";
}
echo "</ul>";

echo "<h3>Testing file_exists</h3>";
$tests = ['neobanking.html', '/app/neobanking.html', 'index.html', '/app/index.html'];
foreach ($tests as $t) {
    echo "$t exists? " . (file_exists($t) ? "YES" : "NO") . "<br>";
}

echo "<h3>$_SERVER</h3><pre>";
print_r($_SERVER);
echo "</pre>";
?>
