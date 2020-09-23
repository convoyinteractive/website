<?php

namespace App\Components;

use ArrayAccess;
use Illuminate\Support\Arr;
use Illuminate\Contracts\Support\Arrayable;

class Component implements Arrayable, ArrayAccess
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
        if ($this->viewExists($this->alias())) {
            return "components.{$this->alias()}";
        }

        if ($this->viewExists($this->type())) {
            return "components.{$this->type()}";
        }

        return "components.error";
    }

    public function __get($key)
    {
        return $this->get($key);
    }

    public function offsetExists($offset)
    {
        return ! is_null($this->get($offset));
    }

    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    public function toArray()
    {
        return $this->data;
    }

    protected function viewExists($name)
    {
        return view()->exists("components.$name");
    }
}
