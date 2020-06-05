<?php

namespace App;

use Illuminate\Support\Arr;

class Attributes
{
    protected $resource;

    protected $key;

    public function __construct(Page $resource, array $key)
    {
        $this->resource = $resource;
        $this->key = $key;
    }

    public function toArray()
    {
        return array_map(function ($value) {
            return implode(' ', $value);
        }, $this->fromPage($this->key) ?? $this->fallback($this->key));
    }

    public function __toString()
    {
        $attributes = array_map(function ($value, $key) {
            return sprintf('%s="%s"', $key, $value);
        }, $this->toArray(), array_keys($this->toArray()));

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
