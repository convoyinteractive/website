<?php

namespace App\Repositories;

use App\Page;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use stdClass;
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

    public function fetchWithDate($resource, $locale = null)
    {
        $locale = $locale ?: app('translator')->getLocale();

        $segments = $this->segments($resource);

        return collect($this->getDirectory([$locale, $segments->directory]))->map(function ($file) use ($locale, $segments) {
            $filename = str_replace('.yml', '', $file->getFilename());
            if (Str::contains($filename, $segments->filename)) {
                $content = $this->fetch("{$segments->directory}/{$filename}", $locale);

                if (preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $filename, $matches)) {
                    $content->date = Carbon::parse($matches[0]);
                }
                return $content;
            }
        })->first();
    }

    public function collect($directory, $locale = null)
    {
        $locale = $locale ?: app('translator')->getLocale();

        return collect($this->getDirectory([$locale, $directory]))->map(function ($file) use ($locale, $directory) {
            $filename = str_replace('.yml', '', $file->getFilename());
            return $this->fetch("{$directory}/{$filename}", $locale);
        });
    }

    public function segments($path)
    {
        $segments = explode('/', $path);

        return tap(new stdClass, function ($result) use ($segments) {
            $result->filename = last($segments);

            unset($segments[count($segments)-1]);
            $result->directory = implode('/', $segments);
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
