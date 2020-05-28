<?php

namespace App\Http\Controllers;

use App\Repositories\Newsletter;

class NewsletterController
{
    public function __invoke($locale, $name, Newsletter $newsletter)
    {
        $content = $newsletter->fetch("{$locale}/{$name}");

        return view($content->template(), compact('content'));
    }
}
