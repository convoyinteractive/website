<?php

namespace App;

use Illuminate\Support\Arr;

class Attributes
{
    protected $resource;

    protected $key;

    protected $options;

    public function __construct(Page $resource, array $key, $options)
    {
        $this->resource = $resource;
        $this->key = $key;
        $this->options = $options;
    }

    public function toArray()
    {
        return array_merge($this->fromPage($this->key) ?? $this->fallback($this->key), $this->options);
    }

    public function __toString()
    {
        $attributes = array_map(function ($value) {
            return is_array($value) ? implode(' ', $value) : $value;
        }, $this->toArray());

        $attributes = array_map(function ($value, $key) {
            return sprintf('%s="%s"', $key, $value);
        }, $attributes, array_keys($attributes));

        return (string) implode(' ', $attributes);
    }

    protected function fromPage($key)
    {
        array_unshift($key, $this->resource->get('type'));

        return Arr::get(
            config('view.attributes'),
            implode('.', $key),
        );
    }

    protected function fallback($key)
    {
        array_unshift($key, 'default');

        return Arr::get(
            config('view.attributes'),
            implode('.', $key),
            []
        );
    }
}
