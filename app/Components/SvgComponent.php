<?php

namespace App\Components;

use Illuminate\Support\HtmlString;

class SvgComponent extends Component
{
    public function type()
    {
        return 'svg';
    }

    public function html()
    {
        $html = app('files')->get(
            storage_path('content/'.$this->get('path'))
        );

        return new HtmlString($html);
    }
}
