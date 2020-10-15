<?php

namespace App\Repositories;

use Illuminate\Support\Arr;

class Likes
{
    public function fetch()
    {
        return json_decode(app('files')->get(storage_path('likes.json')), true);
    }

    public function count($resource)
    {
        return Arr::get($this->fetch(), $this->key($resource), 0);
    }

    public function update($resource, $increment = 1)
    {
        $likes = $this->fetch();

        $count = Arr::get($likes, $this->key($resource), 0) + $increment;

        app('files')->put(storage_path('likes.json'), json_encode(Arr::set($likes, $this->key($resource), $count)));
    }

    protected function key($resource)
    {
        return str_replace('/', '_', $resource);
    }
}
