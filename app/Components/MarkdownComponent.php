<?php

namespace App\Components;

use Illuminate\Support\HtmlString;

class MarkdownComponent extends Component
{
    public function type()
    {
        return 'markdown';
    }

    public function html()
    {
        $html = app('markdown')->text(
            $this->get('body')
        );

        return new HtmlString($html);
    }
}
