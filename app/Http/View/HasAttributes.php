<?php

namespace App\Http\View;

use Illuminate\Support\HtmlString;

trait HasAttributes
{
    public function attributes($key, $merge = [])
    {
        $attributes = new Attributes("{$this->context}.{$key}", $merge);
        return new HtmlString($attributes);
    }
}
