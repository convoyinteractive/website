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

    public function alias()
    {
        return $this->get('alias', $this->is('relation') ? $this->get('resource') : $this->type());
    }

    public function type()
    {
        return $this->get('type', 'component');
    }

    public function exists()
    {
        return !! $this->data;
    }

    public function is($types)
    {
        return in_array($this->type(), is_array($types) ? $types : [$types]);
    }

    public function get($key = null, $default = null)
    {
        return Arr::get($this->data, $key, $default);
    }

    public function has($key = null)
    {
        return Arr::has($this->data, $key);
    }

    public function view()
    {
        return view()->exists("components.{$this->alias()}")
            ? "components.{$this->alias()}"
            : "components.error";
    }
}
