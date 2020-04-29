<?php

namespace App;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Page extends Data
{
    public function template()
    {
        return view()->exists($this->get('type'))
            ? $this->get('type')
            : 'default';
    }

    public function hero()
    {
        return $this->toComponent($this->get('meta.hero'), []);
    }

    public function styles($key = [], $default = null)
    {
        if (! is_array($key)) {
            $key = [$key];
        }

        array_unshift($key, $this->get('type'));

        return Arr::get(config('view.styles'), implode('.', $key), $default);
    }
}
