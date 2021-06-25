<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Collection;

class LocaleController
{
    protected $collection;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    public function __invoke(Request $request)
    {
        $locale = $this->getAcceptLanguage($request);

        if ($locale !== 'de') {
            // return redirect("/en");
        }

        app('translator')->setLocale('de');
        $content = $this->collection->find('home', 'de');
        return view($content->template(), compact('content'));
    }

    protected function getAcceptLanguage(Request $request)
    {
        return explode('-', explode(',', $request->server('HTTP_ACCEPT_LANGUAGE'))[0])[0];
    }
}
