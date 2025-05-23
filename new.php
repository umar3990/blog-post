<?php
require 'inc/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');

    if ($title && $content) {
        $posts = readPosts();
        $posts[] = [
            'id' => time(),
            'title' => $title,
            'content' => $content
        ];
        writePosts($posts);
        header('Location: index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>New Post</title>
</head>
<body>
    <a href="index.php">← Back</a>
    <h1>Create New Post</h1>
    <form method="post">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>
        <label>Content:</label><br>
        <textarea name="content" rows="5" required></textarea><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
