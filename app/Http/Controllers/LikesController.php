<?php

namespace App\Http\Controllers;

use App\Repositories\Likes;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class LikesController
{
    public function show($resource, Likes $likes)
    {
        return $likes->count($resource);
    }

    public function update(Request $request, Likes $likes)
    {
        $likes->update($request->resource, $request->increment);
    }
}
