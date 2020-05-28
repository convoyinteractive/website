<?php

namespace App\Repositories;

use App\Email;
use Symfony\Component\Yaml\Yaml;

class Newsletter
{
    public function all($locale)
    {
        return app('files')->files(
            storage_path('content/newsletters/'.$locale)
        );
    }

    public function fetch($path)
    {
        $raw = app('files')->get(
            storage_path('content/newsletters/'.$path.'.yml')
        );

        return new Email(app(Yaml::class)->parse($raw));
    }
}
