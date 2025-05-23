<?php
require 'inc/functions.php';
$posts = readPosts();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My PHP Blog</title>
</head>
<body>
    <h1>All Posts</h1>
    <a href="new.php">Create New Post</a>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <a href="post.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
