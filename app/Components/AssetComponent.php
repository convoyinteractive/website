<?php

namespace App\Components;

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

    public function format()
    {
        return $this->get('alpha', false) ? "png" : "jpg";
    }

    protected function pathStartsWith($value)
    {
        if ($this->has('path')) {
            return Str::startsWith($this->get('path'), $value);
        }

        return false;
    }
}
