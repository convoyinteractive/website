<?php

namespace App\Http\Controllers;

use App\Repositories\Collection;

class NewsController
{
    public function index($locale, Collection $collection)
    {
        return view('blog', [
            'content' => $collection->fetch('news', $locale),
            'articles' => $collection->collect('news', $locale)->sortByDesc->filename(),
        ]);
    }
}
