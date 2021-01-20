<?php

namespace App\Repositories;

use App\Page;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Support\Collection as SupportCollection;

class Collection
{
    protected $filename;

    public function all($directory, $locale = null)
    {
        $locale = $locale ?: app('translator')->getLocale();

        return $this->files($directory, $locale)->map(
            fn ($file) => $this->find("{$directory}/{$file->getFilename()}", $locale)
        );
    }

    public function find($resource, $locale = null)
    {
        $locale = $locale ?: app('translator')->getLocale();

        $raw = $this->exists($resource, $locale)
            ? $this->content($resource, $locale)
            : $this->similar($resource, $locale);

        return new Page(
            app(Yaml::class)->parse($raw),
            $this->filename
        );
    }

    public function exists($resource, $locale)
    {
        return app('files')->exists(
            storage_path("content/collections/{$locale}/{$resource}.yml")
        );
    }

    protected function similar($resource, $locale)
    {
        $directory = Str::beforeLast($resource, '/');

        $filename = $this->files($directory, $locale)->filter(
            fn ($file) => Str::contains($file->getFilename(), Str::afterLast($resource, '/'))
        )->map->getFilename()->first();

        $this->filename = $filename;

        return $this->content(implode('/', [$directory, $filename]), $locale);
    }

    protected function content($resource, $locale)
    {
        if (!Str::endsWith($resource, '.yml')) {
            $resource .= '.yml';
        }

        $this->filename = $resource;

        return app('files')->get(
            storage_path("content/collections/{$locale}/{$resource}")
        );
    }

    protected function files($directory, $locale)
    {
        $files = app('files')->files(
            storage_path("content/collections/{$locale}/{$directory}/")
        );

        return new SupportCollection($files);
    }
}
