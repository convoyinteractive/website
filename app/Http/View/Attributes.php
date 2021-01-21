<?php

namespace App\Http\View;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Attributes
{
    public function __construct($key, $data = [])
    {
        $this->data = $this->process($key, $data);
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

    protected function process($key, $data)
    {
        $attributes = $this->data($key) ?? $this->fallback($key);

        if (! count($attributes)) {
            return $data;
        }

        $attributes = array_map(
            fn ($value) => is_array($value) ? implode(' ', $value) : $value,
            $attributes
        );

        if (! count($data)) {
            return $attributes;
        }

        foreach ($attributes as $key => $value) {
            if (! array_key_exists($key, $data)) {
                $attributes[$key] = $data[$key];
            } elseif (! Str::contains($value, $data[$key])) {
                $attributes[$key] = "{$attributes[$key]}  {$data[$key]}";
            }
        }

        return $attributes;
    }

    public function __toString()
    {
        $attributes = array_map(
            fn ($value, $key) => sprintf('%s="%s"', $key, $value),
            $this->data,
            array_keys($this->data)
        );

        return (string) implode(' ', $attributes);
    }
}
