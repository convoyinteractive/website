<?php

namespace App\Http\Controllers;

use App\Repositories\Collection;

class PageController
{
    protected $collection;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    public function __invoke($locale, $page = 'home')
    {
        $content = $this->collection->find($page, $locale);

        return view($content->template(), compact('content'));
    }
}
