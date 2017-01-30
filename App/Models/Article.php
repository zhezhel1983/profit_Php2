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

/**
 * Class News
 * @package App\Models
 *
 * @property \App\Models\Article $author
 */
class News
    extends Model
{

    const TABLE = 'news';

    public $title;
    public $text;
    public $author_id;

    /**
     * LAZY LOAD
     *
     * @param $k
     * @return null
     */
    public function __get($k)
    {
        switch ($k) {
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($k)
    {
        switch ($k) {
            case 'author':
                return true;
                break;
            default:
                return false;
        }
    }

}