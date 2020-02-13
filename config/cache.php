<?php

return [

    'default' => env('CACHE_DRIVER', 'file'),

    'stores' => [

        'array' => [
            'driver' => 'array',
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('cache/data'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('CACHE_REDIS_CONNECTION', 'default'),
        ],

    ],

    'prefix' => env('CACHE_PREFIX', 'convoy_cache'),
];
