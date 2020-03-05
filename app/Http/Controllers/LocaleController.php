<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController
{
    protected $defaultLocale = 'en';

    protected $availableLocales = ['en', 'de'];

    public function __invoke(Request $request)
    {
        $locale = $this->getAcceptLanguage($request);

        if (in_array($locale, $this->availableLocales)) {
            return redirect("/{$locale}");
        }

        return redirect("/{$this->defaultLocale}");
    }

    protected function getAcceptLanguage(Request $request)
    {
        return explode('-', explode(',', $request->server('HTTP_ACCEPT_LANGUAGE'))[0])[0];
    }
}
