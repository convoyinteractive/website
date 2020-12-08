<?php

namespace App;

use Illuminate\Support\Arr;

class Attributes
{
    public function __construct($key)
    {
        $this->data = $this->data($key) ?? $this->fallback($key);
    }

    public function data($key)
    {
        return Arr::get(config('components.attributes'), $key);
    }

    public function fallback($key)
    {
        $key = explode('.', $key);
        $key[0] = 'default';
        $key = implode('.', $key);

        return $this->data($key) ?? [];
    }

    public function __toString()
    {
        $attributes = array_map(
            fn ($value) => is_array($value) ? implode(' ', $value) : $value,
            $this->data
        );

        $attributes = array_map(
            fn ($value, $key) => sprintf('%s="%s"', $key, $value),
            $attributes,
            array_keys($attributes)
        );

        return (string) implode(' ', $attributes);
    }
}
