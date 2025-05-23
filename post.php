<?php
require 'inc/functions.php';
$posts = readPosts();
$id = $_GET['id'] ?? null;
$post = null;

foreach ($posts as $p) {
    if ($p['id'] == $id) {
        $post = $p;
        break;
    }
}

if (!$post) {
    echo "Post not found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($post['title']) ?></title>
</head>
<body>
    <a href="index.php">← Back</a>
    <h1><?= htmlspecialchars($post['title']) ?></h1>
    <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
</body>
</html>
