<?php

namespace App;

use Illuminate\Support\Arr;

class Attributes
{
    protected $resource;

    protected $data;

    public function __construct(Page $resource, array $key)
    {
        $this->resource = $resource;

        $this->data = $this->fromPage($key) ?? $this->fallback($key);
    }

    public function add($key, $value)
    {
        $old = Arr::get($this->data, $key, []);

        if (! is_array($old)) {
            $old = [$old];
        }

        Arr::set($this->data, $key, array_merge($old, is_array($value) ? $value : [$value]));
    }

    protected function fromPage($key)
    {
        array_unshift($key, $this->resource->get('type'));

        return Arr::get(
            config('components.attributes'),
            implode('.', $key),
        );
    }

    protected function fallback($key)
    {
        array_unshift($key, 'default');

        return Arr::get(
            config('components.attributes'),
            implode('.', $key),
            []
        );
    }

    public function toArray()
    {
        return $this->data;
    }

    public function __toString()
    {
        $attributes = array_map(function ($value) {
            return is_array($value) ? implode(' ', $value) : $value;
        }, $this->data);

        $attributes = array_map(function ($value, $key) {
            return sprintf('%s="%s"', $key, $value);
        }, $attributes, array_keys($attributes));

        return (string) implode(' ', $attributes);
    }
}
