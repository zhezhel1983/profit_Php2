<?php

namespace App\Models;

use App\Model;

class Article
    extends Model
{

    public static $table = 'news';

    public $title;
    public $text;
// Выводит к примеру 2 последние новости из базы
    public static function getLast($num = 2)
    {
        return self::findLast($num);
    }
}