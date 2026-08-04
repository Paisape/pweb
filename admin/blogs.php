<?php 
require_once __DIR__ . '/layout/header.php'; 
require_once __DIR__ . '/../core/db.php';

$blogs = [];
try {
    $pdo = getDB();
    if (isset($_GET['delete'])) {
        $stmt = $pdo->prepare("DELETE FROM blogs WHERE id = ?");
        $stmt->execute([$_GET['delete']]);
        header("Location: /admin/blogs.php");
        exit;
    }
    $blogs = $pdo->query("SELECT id, title, slug, status, created_at FROM blogs ORDER BY created_at DESC")->fetchAll();
} catch (Exception $e) {
    // DB not ready
}
?>

<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Blogs</h1>
        <p class="text-gray-500 mt-1">Manage your website's blog posts.</p>
    </div>
    <a href="/admin/blog_edit.php" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-5 rounded-lg transition shadow-sm">
        Write New Blog
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php if (empty($blogs)): ?>
            <tr>
                <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                    No blogs found. <a href="blog_edit.php" class="text-blue-600 hover:underline">Write your first one!</a>
                </td>
            </tr>
            <?php else: ?>
                <?php foreach($blogs as $blog): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900"><?= htmlspecialchars($blog['title']) ?></div>
                        <div class="text-sm text-gray-500">/blog/<?= htmlspecialchars($blog['slug']) ?></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <?php if($blog['status'] == 'published'): ?>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Published</span>
                        <?php else: ?>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Draft</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <?= date('M j, Y', strtotime($blog['created_at'])) ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="blog_edit.php?id=<?= $blog['id'] ?>" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                        <a href="blogs.php?delete=<?= $blog['id'] ?>" onclick="return confirm('Are you sure you want to delete this blog?');" class="text-red-600 hover:text-red-900">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>
