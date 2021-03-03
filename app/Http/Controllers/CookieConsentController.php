<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CookieConsentController
{
    protected $data;

    public function update(Request $request)
    {
        $this->data = json_decode(app('files')->get(storage_path('cookieconsent.json')), true);

        if ($request->consent) {
            return $this->increment('consent');
        }

        return $this->increment('reject');
    }

    public function increment($key)
    {
        app('files')->put(storage_path('cookieconsent.json'), json_encode(Arr::set($this->data, $key, Arr::get($this->data, $key, 0) + 1)));
    }
}
