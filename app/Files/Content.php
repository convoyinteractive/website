<?php

namespace App\Files;

use Illuminate\Support\Arr;
use Symfony\Component\Yaml\Yaml;

class Content
{
    protected $data;

    public function __construct($raw)
    {
        $this->data = $this->parse($raw);
    }

    public function get($key = null, $default = null)
    {
        return Arr::get($this->data, $key, $default);
    }

    protected function parse($raw)
    {
        return app(Yaml::class)->parse($raw);
    }
}
