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

    public function isType($type)
    {
        return $this->get('type', 'default') === $type;
    }

    public function hero()
    {
        return $this->toComponent($this->get('meta.hero'), []);
    }

    public function styles($key = [])
    {
        if (! is_array($key)) {
            $key = [$key];
        }

        array_unshift($key, $this->get('type'));

        $default = $key;
        $default[0] = 'default';

        $styles = Arr::get(
            config('view.styles'),
            implode('.', $key),
            Arr::get(config('view.styles'), implode('.', $default), [])
        );

        return implode(' ', $styles);
    }
}
