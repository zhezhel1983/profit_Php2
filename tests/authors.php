<?php

require __DIR__ . '../autoload.php';

$News = \App\Models\News::findAll();
var_dump($News);