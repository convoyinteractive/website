<?php

namespace App\Files;

class Relation
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
        $data = $this->files(
            sprintf('content/collections/%s/%s.yml', app('translator')->getLocale(), $this->path)
        );

        return new Content($data);
    }

    protected function files($path)
    {
        return app('files')->get(storage_path($path));
    }
}
