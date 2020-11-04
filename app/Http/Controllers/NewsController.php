<?php

namespace App\Http\Controllers;

use App\Repositories\Collection;

class NewsController
{
    public function index($locale, Collection $collection)
    {
        return view('blog', [
            'content' => $collection->find('news', $locale),
            'articles' => $collection->all('news', $locale)->sortByDesc->date(),
        ]);
    }

    public function show($locale, $article, Collection $collection)
    {
        $content = $collection->find("news/{$article}", $locale);

        return view($content->template(), compact('content'));
    }
}
