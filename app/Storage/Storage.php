<?php

namespace App\Storage;

class Storage
{
    protected $baseUrl;

    protected $salt;

    public function __construct($baseUrl, $salt)
    {
        $this->baseUrl = $baseUrl;
        $this->salt = $salt;
    }

    public function resolve($path, $parameters = [])
    {
        return $this->signedUrl($path, $parameters);
    }

    protected function signedUrl($path, $parameters)
    {
        $hash = hash_hmac(
            'sha256',
            implode('_', array_merge($parameters, ['path' => "/$path"])),
            $this->salt
        );

        $query = http_build_query(
            array_merge($parameters, ['sign' => $hash])
        );

        return "//{$this->baseUrl}/{$path}?{$query}";
    }
}
