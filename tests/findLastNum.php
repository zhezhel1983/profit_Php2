<?php

require __DIR__ . '/../autoload.php';

$num = 1;
echo "количество новостей = $num . <br>";
$data = \App\Models\Article::getLast($num);
var_dump($data);

$num = 2;
echo "количество новостей = $num . <br>";
$data = \App\Models\Article::getLast($num);
var_dump($data);

$num = 3;
echo "количество новостей = $num . <br>";
$data = \App\Models\Article::getLast($num);
var_dump($data);