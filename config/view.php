<?php

return [

    'paths' => [
        base_path('resources/views'),
    ],

    'compiled' => realpath(storage_path('cache/views')),

    'styles' => [
        'default' => [
            'waypoints' => [
                'daynight' => 'bg-black text-white',
            ],
            'hero' => [
                'wrap' => 'block',
                'title' => 'px-6 font-sans lg:w-10/12 mx-auto my-40',
                'component' => 'block w-full pointer-events-none'
            ],
            'gallery' => [
                'component' => 'flex items-center overflow-x-auto col-gap-12 pb-6 -mb-6',
            ],
            'image' => [
                'component' => 'mx-auto max-w-6xl',
            ],
            'list' => [
                'wrap' => 'my-20 mx-auto flex w-10/12',
                'title' => 'w-3/10',
                'component' => 'w-7/10 px-6 ml-auto',
            ],
            'markdown' => [
                'wrap' => 'my-20 mx-auto flex w-10/12',
                'title' => 'w-3/10',
                'component' => 'w-7/10 px-6 ml-auto',
            ],
            'quote' => [
                'component' => 'w-full min-h-screen flex items-center daynight',
            ],
        ],

        'services' => [
            'hero' => [
                'wrap' => 'flex justify-between items-center lg:w-10/12 mx-auto my-40',
                'title' => 'px-6 font-sans',
            ],
            'gallery' => [
                'component' => 'flex items-center overflow-x-auto col-gap-12 pb-6 -mb-6',
            ],
            'image' => [
                'component' => 'mx-auto max-w-6xl',
            ],
            'list' => [
                'wrap' => 'my-20 mx-auto flex w-10/12',
                'title' => 'w-3/10',
                'component' => 'w-7/10 px-6 ml-auto',
            ],
            'markdown' => [
                'wrap' => 'my-20 mx-auto flex w-10/12',
                'title' => 'w-3/10',
                'component' => 'w-7/10 px-6 ml-auto',
            ],
            'quote' => [
                'component' => 'w-full min-h-screen flex items-center bg-black text-white',
            ],
        ],
    ],
];
