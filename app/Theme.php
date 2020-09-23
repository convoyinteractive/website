<?php

namespace App;

use Illuminate\Support\Arr;

class Theme
{
    protected $attributes;

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function __get($key)
    {
        return Arr::get($this->attributes, $key, null);
    }

    public function toArray()
    {
        return $this->attributes;
    }

    public function __toString()
    {
        return implode('; ', [
            "color: $this->text",
            "background: $this->background"
        ]);
    }
}
