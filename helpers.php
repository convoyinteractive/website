<?php

use App\Storage\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\HtmlString;

if (! function_exists('public_path')) {
    function encode_email($email)
    {
        $output = "";
        for ($i = 0; $i < strlen($email); $i++) {
            $output .= "&#" . ord($email[$i]) . ";";
        }
        return new HtmlString($output);
    }
}

if (! function_exists('public_path')) {
    function public_path($path = '')
    {
        return app()->basePath('public').($path ? '/'.$path : $path);
    }
}

if (! function_exists('mix')) {
    function mix($path, $manifestDirectory = '')
    {
        static $manifests = [];

        if (! Str::startsWith($path, '/')) {
            $path = "/{$path}";
        }

        if ($manifestDirectory && ! Str::startsWith($manifestDirectory, '/')) {
            $manifestDirectory = "/{$manifestDirectory}";
        }

        $manifestKey = $manifestDirectory ? $manifestDirectory : '/';

        if (file_exists(public_path($manifestDirectory.'/hot'))) {
            return new HtmlString("//localhost:8080{$path}");
        }

        if (in_array($manifestKey, $manifests)) {
            $manifest = $manifests[$manifestKey];
        } else {
            if (! file_exists($manifestPath = public_path($manifestDirectory.'/mix-manifest.json'))) {
                throw new Exception('The Mix manifest does not exist.');
            }

            $manifests[$manifestKey] = $manifest = json_decode(
                file_get_contents($manifestPath),
                true
            );
        }

        if (! array_key_exists($path, $manifest)) {
            throw new Exception(
                "Unable to locate Mix file: {$path}. Please check your ".
                'webpack.mix.js output paths and try again.'
            );
        }

        return new HtmlString($manifestDirectory.$manifest[$path]);
    }

    if (! function_exists('asset')) {
        function asset($path, $parameters = [])
        {
            return app(Storage::class)->resolve($path, $parameters);
        }
    }
}
