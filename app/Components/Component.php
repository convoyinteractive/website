<?php

namespace App\Components;

use App\Attributes;
use ArrayAccess;
use Illuminate\Support\Arr;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\HtmlString;

class Component implements Arrayable, ArrayAccess
{
    protected $data;

    protected $context;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function alias()
    {
        return $this->get('alias', $this->type());
    }

    public function type()
    {
        return $this->get('type', 'component');
    }

    public function context($context = null)
    {
        if ($context) {
            $this->context = $context;
        }

        return $this->context;
    }

    public function exists()
    {
        return !! $this->data;
    }

    public function is($types)
    {
        return in_array($this->type(), is_array($types) ? $types : [$types]);
    }

    public function isNot($types)
    {
        return ! $this->is($types);
    }

    public function get($key = null, $default = null)
    {
        return Arr::get($this->data, $key, $default);
    }

    public function has($key = null)
    {
        return Arr::has($this->data, $key);
    }

    public function attributes($key)
    {
        return new HtmlString(new Attributes("{$this->context}.{$key}"));
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

    public function __set($key, $value)
    {
        return $this->data[$key] = $value;
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
