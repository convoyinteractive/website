<?php

namespace App\Components;

use Illuminate\Support\Arr;

class DataComponent
{
    protected $type;

    protected $data;

    public function __construct($type, $data)
    {
        $this->type = $type;
        $this->data = $data;
    }

    public function type()
    {
        return $this->type;
    }

    public function data()
    {
        return $this->data;
    }

    public function get($key = null, $default = null)
    {
        return Arr::get($this->data, $key, $default);
    }

    public function has($key = null)
    {
        return Arr::has($this->data, $key);
    }
}
