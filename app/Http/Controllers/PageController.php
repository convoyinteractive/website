<?php

namespace App\Http\Controllers;

use App\Files\Content;
use Illuminate\Filesystem\Filesystem;

class PageController
{
    public function __invoke($locale, $page = null, Filesystem $files)
    {
        $filename = $page ?? 'home';

        $content = new Content(
            $files->get(storage_path("content/pages/{$locale}/{$filename}.yml"))
        );

        return view($content->get('view') ?? 'page', compact('content'));
    }
}
