<?php

namespace App\Components;

use App\Repositories\Storage;
use Illuminate\Support\Str;

class AssetComponent extends Component
{
    public function isVideo()
    {
        return $this->is('video') || $this->pathStartsWith('video');
    }

    public function isImage()
    {
        if ($this->isVideo()) {
            return false;
        }

        return $this->is('image');
    }

    public function url($size = null)
    {
        return app(Storage::class)->resolve(
            $this->path($size),
            $this->queryParameters()
        );
    }

    public function path($size = null)
    {
        return $this->get($size  ?  "sizes.{$size}" : "path");
    }

    public function format()
    {
        return $this->get('alpha', false) ? "png" : "jpg";
    }

    protected function queryParameters()
    {
        return [
            'format' => $this->format(),
        ];
    }

    protected function pathStartsWith($value)
    {
        if ($this->has('path')) {
            return Str::startsWith($this->get('path'), $value);
        }

        return false;
    }
}
