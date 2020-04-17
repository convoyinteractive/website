<?php

namespace App\Http\Controllers;

use App\Repositories\Collection;

class PageController
{
    public function __invoke($locale, $page = null, Collection $collection)
    {
        $filename = $page ?? 'home';

        $content = $collection->fetch("{$locale}/{$filename}");

        return view($content->template(), compact('content'));
    }
}
