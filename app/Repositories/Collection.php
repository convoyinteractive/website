<?php

namespace App\Repositories;

use App\Page;
use Symfony\Component\Yaml\Yaml;

class Collection
{
    public function fetch($resource, $locale = null)
    {
        $locale = $locale ?: app('translator')->getLocale();

        $raw = app('files')->get(
            storage_path("content/collections/{$locale}/{$resource}.yml")
        );

        return new Page(app(Yaml::class)->parse($raw));
    }
}
