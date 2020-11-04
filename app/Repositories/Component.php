<?php

namespace App\Repositories;

use App\Data;
use Symfony\Component\Yaml\Yaml;

class Component
{
    public function localize($resource)
    {
        return $this->find($resource, app('translator')->getLocale());
    }

    public function find($resource, $locale)
    {
        $raw = app('files')->get(
            storage_path("content/components/{$locale}/{$resource}.yml")
        );

        return new Data(app(Yaml::class)->parse($raw));
    }
}
