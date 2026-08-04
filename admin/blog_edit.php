<?php 
require_once __DIR__ . '/layout/header.php'; 
require_once __DIR__ . '/../core/db.php';

$pdo = getDB();
$id = $_GET['id'] ?? null;
$blog = ['title' => '', 'slug' => '', 'status' => 'draft', 'content' => '', 'hero_image' => ''];

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM blogs WHERE id = ?");
    $stmt->execute([$id]);
    $blog = $stmt->fetch() ?: $blog;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['slug'])));
    $status = $_POST['status'];
    $content = $_POST['content'];
    
    // In a real app, handle file uploads for hero_image here
    
    if ($id) {
        $stmt = $pdo->prepare("UPDATE blogs SET title=?, slug=?, status=?, content=? WHERE id=?");
        $stmt->execute([$title, $slug, $status, $content, $id]);
    } else {
        $stmt = $pdo->prepare("INSERT INTO blogs (title, slug, status, content) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $slug, $status, $content]);
        $id = $pdo->lastInsertId();
    }
    header("Location: /admin/blogs.php");
    exit;
}
?>

<div class="mb-8 flex justify-between items-center">
    <div>
        <h1 class="text-2xl font-bold text-gray-900"><?= $id ? 'Edit Blog' : 'Write New Blog' ?></h1>
    </div>
    <a href="/admin/blogs.php" class="text-gray-500 hover:text-gray-900 font-medium">Cancel</a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
    <form method="POST" id="blogForm" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Blog Title</label>
                <input type="text" name="title" value="<?= htmlspecialchars($blog['title']) ?>" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                <input type="text" name="slug" value="<?= htmlspecialchars($blog['slug']) ?>" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none" placeholder="e.g. my-awesome-post">
            </div>
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
            <select name="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none">
                <option value="draft" <?= $blog['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
                <option value="published" <?= $blog['status'] == 'published' ? 'selected' : '' ?>>Published</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Content</label>
            <div id="editor" class="h-96 rounded-b-lg border-gray-300">
                <?= $blog['content'] ?>
            </div>
            <!-- Hidden input to store quill HTML for form submission -->
            <input type="hidden" name="content" id="hiddenContent">
        </div>

        <div class="flex justify-end pt-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-6 rounded-lg transition shadow-sm">
                Save Blog
            </button>
        </div>
    </form>
</div>

<script>
    var quill = new Quill('#editor', {
        theme: 'snow',
        placeholder: 'Write your masterpiece...',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['link', 'image'],
                ['clean']
            ]
        }
    });

    // Populate hidden field with HTML on submit
    document.getElementById('blogForm').onsubmit = function() {
        var html = document.querySelector('.ql-editor').innerHTML;
        document.getElementById('hiddenContent').value = html;
    };
</script>

<?php require_once __DIR__ . '/layout/footer.php'; ?>
