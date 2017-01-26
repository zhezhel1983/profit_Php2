<?php

require __DIR__ . '/../autoload.php';

$article = \App\Models\Article::findById(1);
assert ( is_object($article ) );
assert ( $article instanceof \App\Models\Article);
assert ('Мир биатлона:против России или допинга?' == $article->title);


