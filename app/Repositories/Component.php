<?php

namespace App\Repositories;

use App\Data;
use Symfony\Component\Yaml\Yaml;

class Component
{
    public function find($resource, $locale = null)
    {
        $locale = $locale ?: app('translator')->getLocale();

        $raw = app('files')->get(
            storage_path("content/components/{$locale}/{$resource}.yml")
        );

        return new Data(app(Yaml::class)->parse($raw));
    }
}
