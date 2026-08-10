<?php
include_once "include.php";

$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
$unsubscribed = false;

if ($email) {
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare("UPDATE subscribers SET status = 'unsubscribed' WHERE email = ?");
        $stmt->execute([$email]);
        $unsubscribed = true;
    } catch (Exception $e) {
        error_log("Unsubscribe exception: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Unsubscribe Newsletter — Paisape</title>
<link rel="icon" type="image/svg+xml" href="/assets/paisape-logo.png" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl p-8 border border-slate-200 text-center">
        <img src="/assets/logo.svg" alt="Paisape" class="h-9 mx-auto mb-6">
        
        <?php if ($unsubscribed): ?>
            <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h1 class="text-xl font-bold text-slate-900 mb-2">Unsubscribed Successfully</h1>
            <p class="text-sm text-slate-500 mb-6">Your email <strong class="text-slate-700"><?= htmlspecialchars($email) ?></strong> has been removed from our newsletter broadcast list.</p>
        <?php else: ?>
            <h1 class="text-xl font-bold text-slate-900 mb-2">Unsubscribe Request</h1>
            <p class="text-sm text-slate-500 mb-6">Invalid or missing email address link.</p>
        <?php endif; ?>

        <a href="/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm px-6 py-2.5 rounded-full transition">Return to Home</a>
    </div>
</body>
</html>
