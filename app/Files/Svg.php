<?php

namespace App\Files;

use Illuminate\Support\Str;
use App\Components\DataComponent;
use Illuminate\Support\HtmlString;

class Svg
{
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public static function make($path)
    {
        return new static($path);
    }

    public function content()
    {
        $svg = $this->files($this->path);
        return new DataComponent('svg', [
            'path' => $this->path,
            'content' => new HtmlString($svg),
        ]);
    }

    protected function files($path)
    {
        return app('files')->get(public_path($path));
    }
}
