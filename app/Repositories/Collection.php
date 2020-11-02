<?php

namespace App\Repositories;

use App\Page;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

class Collection
{
    public function fetch($resource, $locale = null)
    {
        $locale = $locale ?: app('translator')->getLocale();

        $raw = $this->getFile([$locale, $resource]);

        return new Page(
            app(Yaml::class)->parse($raw),
            Str::afterLast($resource, '/')
        );
    }


    public function collect($directory, $locale = null)
    {
        $locale = $locale ?: app('translator')->getLocale();

        return collect($this->getDirectory([$locale, $directory]))->map(function ($file) use ($locale, $directory) {
            $filename = str_replace('.yml', '', $file->getFilename());
            return $this->fetch("{$directory}/{$filename}", $locale);
        });
    }

    protected function getDirectory(array $params)
    {
        return app('files')->files($this->getPath($params));
    }

    protected function getFile(array $params)
    {
        return app('files')->get($this->getPath($params) . '.yml');
    }

    protected function getPath(array $params)
    {
        return storage_path("content/collections/" . implode('/', $params));
    }
}
