<?php

return [

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('content'),
            'url' => env('APP_URL').'/assets',
            'visibility' => 'public',
        ],
    ],

];
