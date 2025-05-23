<?php

function readPosts() {
    $file = 'data/posts.json';
    if (!file_exists($file)) {
        return [];
    }

    $json = file_get_contents($file);
    return json_decode($json, true) ?: [];
}

function writePosts($posts) {
    if (!is_dir('data')) {
        mkdir('data');
    }

    file_put_contents('data/posts.json', json_encode($posts, JSON_PRETTY_PRINT));
}
