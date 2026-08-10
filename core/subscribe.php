<?php
include_once __DIR__ . '/../include.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$source = trim($_POST['source'] ?? 'website');

if (!$email) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter a valid email address.']);
    exit;
}

try {
    $pdo = getDB();
    $stmt = $pdo->prepare("INSERT INTO subscribers (email, source) VALUES (?, ?) ON DUPLICATE KEY UPDATE status = 'active'");
    $stmt->execute([$email, $source]);
    
    echo json_encode(['status' => 'success', 'message' => 'Thank you for subscribing! You are on the list.']);
} catch (Exception $e) {
    error_log("Subscribe Exception: " . $e->getMessage());
    echo json_encode(['status' => 'error', 'message' => 'Subscription failed. Please try again.']);
}
exit;
