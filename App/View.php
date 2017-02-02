<?php

namespace App;

use App\Models\Article;
use App\TMagicProp;

class View
    implements \Countable, \Iterator
{
    use TMagicProp;


    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        $this->data[$name];
    }

    public function __isset($name)
    {
       return isset($this->data[$name]);
    }

    public function count()
    {
        return count($this->data);
    }

    public function render($template)
    {
        foreach ($this->data as $key => $value) {
             $$key = $value;
        }
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function current()
    {
        return current($this->data);
    }

    public function next()
    {
        next($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function valid()
    {
        return false !== current($this->data);
    }

    public function rewind()
    {
        reset($this->data);
    }


}