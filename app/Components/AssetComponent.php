<?php

namespace App\Components;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Repositories\Storage;

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

    public function url($size = null, $resolution = 1)
    {
        $query = array_map(function ($value) use ($resolution) {
            if (is_numeric($value)) {
                $value = $value * $resolution;
            }

            return $value;
        }, $this->queryParameters($size));

        return app(Storage::class)->resolve($this->path($size), $query);
    }

    public function path($size = null)
    {
        return $this->get($size  ?  "sizes.{$size}" : "path");
    }

    public function format()
    {
        return $this->get('alpha', false) ? "png" : "jpg";
    }

    protected function queryParameters($key)
    {
        return array_merge([
            'format' => $this->format(),
        ], $this->queryConfig($key));
    }

    public function config($key, $default = null)
    {
        return Arr::get(config('assets'), $key, $default);
    }

    protected function queryConfig($key)
    {
        $context = "query.{$this->context()}.{$key}";

        return $this->config($context) ?? $this->defaultQueryConfig($key);
    }

    protected function defaultQueryConfig($key)
    {
        $context = explode(".", $this->context());
        $context[0] = "default";
        $context = implode(".", $context);

        $default = "query.{$context}.large";
        $context = "query.{$context}.{$key}";

        return $this->config($context) ?? $this->config($default, []);
    }

    protected function pathStartsWith($value)
    {
        if ($this->has('path')) {
            return Str::startsWith($this->get('path'), $value);
        }

        return false;
    }
}
