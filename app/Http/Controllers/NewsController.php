<?php

namespace App\Http\Controllers;

use App\Pagination\Pagination;
use Carbon\Carbon;
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

        $pagination = tap(
            Pagination::make($collection->all('news'))->by('date'),
            fn ($pagination) => $pagination->current($content->date())
        );

        return view($content->template(), compact('content', 'pagination'));
    }
}
