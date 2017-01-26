<?php

require __DIR__ . '/autoload.php';

$article = new \App\Models\Article();

$article->title = 'Текстовый заголовок';

$article->insert();
