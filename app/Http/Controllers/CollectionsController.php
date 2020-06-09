<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Collection;

class CollectionsController
{
    public function __invoke($resource, Collection $collection, Request $request)
    {
        $locale = $request->hl ?? 'en';

        return $collection->fetch($resource, $locale);
    }
}
