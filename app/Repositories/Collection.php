<?php

namespace App\Repositories;

use App\Page;
use Symfony\Component\Yaml\Yaml;

class Collection
{
    public function fetch($path)
    {
        $raw = app('files')->get(
            storage_path('content/collections/'.$path.'.yml')
        );

        return new Page(app(Yaml::class)->parse($raw));
    }
}
