<?php

namespace App;

use Illuminate\Support\Arr;
use JsonSerializable;

class Theme implements JsonSerializable
{
    protected $defaults = [
        "text" => "#ffffff",
        "background" => "#000000",
    ];

    protected $attributes;

    public function __construct($attributes = null)
    {
        $this->attributes = $attributes ?? $this->defaults;
    }

    public function __get($key)
    {
        return Arr::get($this->attributes, $key, null);
    }

    public function toArray()
    {
        return $this->attributes;
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function __toString()
    {
        return implode('; ', [
            "color: $this->text",
            "background: $this->background"
        ]);
    }
}
