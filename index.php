<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\Article::findAll();
//var_dump($data);
//вывести все findAll()
include __DIR__ . '/templates/index.php';