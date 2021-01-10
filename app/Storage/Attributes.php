<?php

namespace App\Storage;

use Illuminate\Support\Arr;

class Attributes
{
    protected $key;

    protected $data = [];

    protected $resolution = 1;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public static function from($key)
    {
        return new static($key);
    }

    public function get()
    {
        return array_merge($this->data, $this->fromConfig($this->key) ?? $this->default());
    }

    public function default()
    {
        $segments = explode(".", $this->key);

        $segments[0] = "default";
        $context = implode(".", $segments);

        $segments[count($segments)-1] = "large";
        $default = implode(".", $segments);

        return $this->fromConfig($context) ?? $this->fromConfig($default, []);
    }

    public function format($format)
    {
        $this->data['format'] = $format;

        return $this;
    }

    public function resolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    protected function fromConfig($key, $default = null)
    {
        $attributes = Arr::get(config('assets.attributes'), $key, $default);

        if (! $attributes) {
            return $attributes;
        }

        return array_map(function ($value) {
            if (is_numeric($value)) {
                $value = $value * $this->resolution;
            }

            return $value;
        }, $attributes);
    }
}
