<?php

namespace App\Components;

use App\Storage\Storage;
use App\Storage\Attributes;
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

    public function path($size = null)
    {
        return $this->get($size  ?  "sizes.{$size}" : "path");
    }

    public function alpha()
    {
        return $this->get('alpha', false);
    }

    public function poster()
    {
        if ($this->has('poster')) {
            return $this->resolveUrl($this->get('poster'), [
                'width' => 480,
                'format' => 'jpg',
            ]);
        }
    }

    public function url($size = null, $resolution = 1, $format = 'webp')
    {
        $context = "{$this->context()}.{$size}";

        return $this->resolveUrl(
            $this->path($size),
            Attributes::from($context)->format($format)->resolution($resolution)->get()
        );
    }

    public function fallbackUrl($size = null, $resolution = 1)
    {
        $format = $this->alpha() ? "png" : "jpg";

        return $this->url($size, $resolution, $format);
    }

    protected function resolveUrl($path, $params)
    {
        return app(Storage::class)->resolve($path, $params);
    }

    protected function pathStartsWith($value)
    {
        if ($this->has('path')) {
            return Str::startsWith($this->get('path'), $value);
        }

        return false;
    }
}
