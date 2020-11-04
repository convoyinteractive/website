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

    public function show($locale, $article, Collection $collection)
    {
        $content = $collection->fetchWithDate("news/{$article}", $locale);

        return view($content->template(), compact('content'));
    }
}
