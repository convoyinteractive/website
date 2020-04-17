<?php

namespace App\Repositories;

use App\Data;
use Symfony\Component\Yaml\Yaml;

class Component
{
    public function fetch($path)
    {
        $raw = app('files')->get(
            storage_path('content/components/'.$path.'.yml')
        );

        return new Data(app(Yaml::class)->parse($raw));
    }
}
