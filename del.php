<?php

require  __DIR__ . '/autoload.php';

if ($_GET(['id'])) {
    $article = \App\Models\Article::findById($_GET(['id']));
    $article->delete;
}

header('Location: /index.php');