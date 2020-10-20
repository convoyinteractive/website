<?php

namespace App;

use Illuminate\Support\Collection;

class Sitemap
{
    protected $locale;

    protected $routes = [];

    public function __construct($locale)
    {
        $this->locale = $locale;
    }

    public function routes()
    {
        if (count($this->routes)) {
            return $this->routes;
        }

        $routes = $this->files()->filter(function ($file) {
            return $file->getExtension() === 'yml';
        })->map(function ($file) {
            return str_replace('.yml', '/', $file->getRelativePathname());
        });

        return tap($routes, function ($routes) {
            $this->routes = $routes;
        });
    }

    public function similar($needle)
    {
        $results = [];
        foreach ($this->routes() as $route) {
            $results[$route] = similar_text($needle, $route);
        }

        return array_search(max($results), $results);
    }

    protected function files()
    {
        $files = app('files')->allFiles(
            storage_path("content/collections/{$this->locale}")
        );

        return new Collection($files);
    }
}
