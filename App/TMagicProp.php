<?php

namespace App;


trait TMagicProp
{
    protected $data = [];
    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }
    public function __get($key)
    {
        return $this->data[$key];
    }
    public function __isset($key)
    {
        return isset($this->data[$key]);
    }
}