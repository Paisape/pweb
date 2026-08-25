<?php
require_once __DIR__ . '/auth_check.php';
require_once __DIR__ . '/../core/db.php';

date_default_timezone_set('Asia/Kolkata');
$currentDay = strtolower(date('l'));

$bannersDir = __DIR__ . '/../assets/banners';
if (!file_exists($bannersDir)) {
    mkdir($bannersDir, 0755, true);
}

$success_msg = '';
$error_msg = '';

$daysList = [
    'monday'    => 'Monday',
    'tuesday'   => 'Tuesday',
    'wednesday' => 'Wednesday',
    'thursday'  => 'Thursday',
    'friday'    => 'Friday',
    'saturday'  => 'Saturday',
    'sunday'    => 'Sunday'
];

// Handle File Upload for Day-Wise Banner
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'upload_banner') {
    $targetDay = strtolower(trim($_POST['target_day'] ?? ''));

    if (isset($daysList[$targetDay]) && isset($_FILES['banner_file']) && $_FILES['banner_file']['error'] === UPLOAD_ERR_OK) {
        $fileTmp  = $_FILES['banner_file']['tmp_name'];
        $fileName = $_FILES['banner_file']['name'];
        $fileExt  = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowedExts = ['png', 'jpg', 'jpeg', 'webp'];
        if (in_array($fileExt, $allowedExts)) {
            // Remove existing banner files for this day
            foreach ($allowedExts as $ext) {
                $oldFile = "{$bannersDir}/{$targetDay}.{$ext}";
                if (file_exists($oldFile)) {
                    @unlink($oldFile);
                }
            }

            $destPath = "{$bannersDir}/{$targetDay}.{$fileExt}";
            if (move_uploaded_file($fileTmp, $destPath)) {
                $success_msg = "Successfully updated banner for " . $daysList[$targetDay] . "!";
            } else {
                $error_msg = "Failed to save uploaded file. Please check folder permissions.";
            }
        } else {
            $error_msg = "Invalid image format. Allowed formats: PNG, JPG, JPEG, WEBP.";
        }
    } else {
        $error_msg = "Please select a valid image file to upload.";
    }
}

// Function to find existing file for a day
function getDayBannerUrl($dayKey) {
    $bannersDir = __DIR__ . '/../assets/banners';
    $extensions = ['png', 'jpg', 'jpeg', 'webp'];
    foreach ($extensions as $ext) {
        $candidate = "{$bannersDir}/{$dayKey}.{$ext}";
        if (file_exists($candidate)) {
            return "/assets/banners/{$dayKey}.{$ext}?v=" . filemtime($candidate);
        }
    }
    return "/assets/paisape-email-banner.png";
}

$pageTitle = "Microsoft 365 Daily Email Banners";
require_once __DIR__ . '/layout/header.php';
?>

<div class="max-w-6xl mx-auto pb-12">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Microsoft 365 Day-Wise Email Banners</h1>
            <p class="text-sm text-gray-500">Configure promotional service banners served dynamically to outgoing corporate emails via M365 Exchange Mail Flow Rules.</p>
        </div>
        <div class="bg-emerald-50 border border-emerald-200 px-4 py-2 rounded-xl flex items-center gap-2">
            <span class="w-2.5 h-2.5 rounded-full bg-emerald-600 animate-pulse"></span>
            <span class="text-xs font-bold text-emerald-800">Today's Active Day: <?= ucfirst($currentDay) ?></span>
        </div>
    </div>

    <?php if ($success_msg): ?>
        <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm font-medium">
            <?= htmlspecialchars($success_msg) ?>
        </div>
    <?php endif; ?>

    <?php if ($error_msg): ?>
        <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm font-medium">
            <?= htmlspecialchars($error_msg) ?>
        </div>
    <?php endif; ?>

    <!-- Microsoft 365 Integration Instructions Banner -->
    <div class="mb-8 p-6 bg-slate-900 text-white rounded-2xl shadow-sm border border-slate-800 space-y-3">
        <div class="flex items-center gap-2">
            <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-blue-500 text-white">M365 Exchange Rule Endpoint</span>
            <span class="text-xs text-slate-400">Copy & Paste into Microsoft 365 Mail Flow Disclaimer / Signature HTML</span>
        </div>
        <div class="bg-slate-800/90 p-3 rounded-xl font-mono text-xs text-blue-300 overflow-x-auto border border-slate-700 select-all">
            &lt;img src="https://paisape.in/email-banner.png" alt="Paisape Services" style="max-width:600px; width:100%; height:auto; display:block; border-radius:12px;" /&gt;
        </div>
        <p class="text-xs text-slate-400">This URL remains static in Microsoft 365 Exchange. Every morning, Microsoft 365 automatically fetches today's updated banner image directly from Paisape servers.</p>
    </div>

    <!-- Day-Wise Banners Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($daysList as $dayKey => $dayName): ?>
            <?php 
            $isToday = ($dayKey === $currentDay);
            $bannerUrl = getDayBannerUrl($dayKey);
            ?>
            <div class="bg-white rounded-2xl border <?= $isToday ? 'border-blue-500 ring-2 ring-blue-500/20' : 'border-gray-200' ?> shadow-sm overflow-hidden flex flex-col">
                <div class="p-4 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
                    <div class="flex items-center gap-2">
                        <span class="font-bold text-gray-900 text-sm"><?= $dayName ?> Banner</span>
                        <?php if ($isToday): ?>
                            <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Live Today</span>
                        <?php endif; ?>
                    </div>
                    <a href="/api/daily-banner.php?day=<?= $dayKey ?>" target="_blank" class="text-xs text-blue-600 hover:underline font-semibold">Test Endpoint &rarr;</a>
                </div>

                <div class="p-4 flex-1 bg-slate-50 flex items-center justify-center min-h-[160px] border-b border-gray-100">
                    <img src="<?= $bannerUrl ?>" alt="<?= $dayName ?> Banner" class="max-h-36 w-auto object-contain rounded-lg shadow-sm">
                </div>

                <div class="p-4 bg-white">
                    <form method="POST" action="/admin/email_banners.php" enctype="multipart/form-data" class="space-y-3">
                        <input type="hidden" name="action" value="upload_banner">
                        <input type="hidden" name="target_day" value="<?= $dayKey ?>">

                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-500 mb-1">Update <?= $dayName ?> Image</label>
                            <input type="file" name="banner_file" accept=".png,.jpg,.jpeg,.webp" required class="w-full text-xs text-gray-600 border border-gray-300 rounded-lg p-1.5 focus:outline-none">
                        </div>

                        <button type="submit" class="w-full py-2 bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold rounded-xl shadow-sm transition">
                            Upload <?= $dayName ?> Banner
                        </button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>
