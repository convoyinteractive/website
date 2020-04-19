<?php

return [

    'paths' => [
        base_path('resources/views'),
    ],

    'compiled' => realpath(storage_path('cache/views')),

    'styles' => [
        'default' => [
            'gallery' => 'flex items-center overflow-x-auto col-gap-12 pb-6 -mb-6',
            'image' => 'mx-auto',
            'list' => 'w-7/10 px-6 ml-auto',
            'markdown' => 'w-7/10 px-6 ml-auto',
            'quote' => 'w-full min-h-screen flex items-center bg-black text-white',
        ]
    ],
];
