<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Component;

class ComponentsController
{
    public function __invoke($resource, Component $component, Request $request)
    {
        $locale = $request->hl ?? 'en';

        return $component->fetch($resource, $locale);
    }
}
