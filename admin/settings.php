<?php 
require_once __DIR__ . '/layout/header.php'; 
require_once __DIR__ . '/../core/db.php';

$pdo = getDB();
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO settings (setting_key, setting_value) VALUES (?, ?) ON DUPLICATE KEY UPDATE setting_value = ?");
    
    foreach ($_POST as $key => $value) {
        $stmt->execute([$key, $value, $value]);
    }
    $success = true;
}

$settingsRaw = [];
try {
    $settingsRaw = $pdo->query("SELECT setting_key, setting_value FROM settings")->fetchAll(PDO::FETCH_KEY_PAIR);
} catch (Exception $e) {
    // DB not ready
}

function getSet($key, $default, $settingsRaw) {
    return isset($settingsRaw[$key]) ? $settingsRaw[$key] : $default;
}
?>

<div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-900">Site Settings</h1>
    <p class="text-gray-500 mt-1">Manage global website configuration.</p>
</div>

<?php if ($success): ?>
<div class="bg-green-50 border-l-4 border-green-400 p-4 mb-8">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
        </div>
        <div class="ml-3">
            <p class="text-sm text-green-700">Settings saved successfully.</p>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <form method="POST" class="p-6 space-y-6">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Site Name</label>
                <input type="text" name="site_name" value="<?= htmlspecialchars(getSet('site_name', 'Paisape', $settingsRaw)) ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Contact Email</label>
                <input type="email" name="contact_email" value="<?= htmlspecialchars(getSet('contact_email', 'hello@paisape.in', $settingsRaw)) ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Support Phone Number</label>
                <input type="text" name="support_phone" value="<?= htmlspecialchars(getSet('support_phone', '', $settingsRaw)) ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Office Address</label>
                <input type="text" name="office_address" value="<?= htmlspecialchars(getSet('office_address', '', $settingsRaw)) ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none">
            </div>
        </div>

        <div class="pt-4 border-t border-gray-100 flex justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-6 rounded-lg transition shadow-sm">
                Save Settings
            </button>
        </div>
    </form>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>
