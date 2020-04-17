<?php

namespace App\Components;

use Illuminate\Support\Arr;

class Component
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function type()
    {
        return $this->get('type', 'component');
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
