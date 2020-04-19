<?php

namespace App\Http\Controllers;

use App\Repositories\Collection;

class PageController
{
    public function __invoke($locale, $page = 'home', Collection $collection)
    {
        $content = $collection->fetch("{$locale}/{$page}");
        $styles = collect(config('view.styles')[$content->template()]);

        return view($content->template(), compact('content', 'styles'));
    }
}
