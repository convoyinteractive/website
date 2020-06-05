<?php

namespace App;

use Illuminate\Support\HtmlString;

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

    public function attributes($key = [])
    {
        if (! is_array($key)) {
            $key = [$key];
        }

        return new HtmlString(
            (string) new Attributes($this, $key)
        );
    }
}
