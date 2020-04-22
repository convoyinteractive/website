<?php

namespace App;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Page extends Data
{
    public function template()
    {
        return $this->get('type');
    }

    public function styles()
    {
        $config = Arr::get(
            config('view.styles'),
            $this->template()
        );

        return new Collection($config ?? []);
    }
}
