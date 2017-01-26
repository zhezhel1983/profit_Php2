<?php
require __DIR__ . '/autoload.php';


$article = \App\Models\Article::findById((int)$_GET['id']);

if ($article) {
    include __DIR__ . '/templates/article.php';
} else {
    header('Location: /index.php');
}







