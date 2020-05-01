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
                'wrap' => 'my-20 mx-auto md:flex items-start lg:w-10/12',
                'title' => 'md:sticky top-10 pb-10 font-sans text-2xl xl:text-like-2xl font-semibold md:w-3/10 px-6',
                'component' => 'md:w-7/10 px-6 ml-auto',
            ],
            'markdown' => [
                'wrap' => 'my-20 mx-auto md:flex items-start lg:w-10/12',
                'title' => 'font-sans text-2xl xl:text-like-2xl font-semibold md:w-3/10 px-6 mb-10',
                'component' => 'md:w-7/10 px-6 ml-auto',
            ],
            'quote' => [
                'component' => 'w-full min-h-screen flex items-center daynight',
            ],
        ],

        'services' => [
            'hero' => [
                'wrap' => 'md:flex justify-between items-center lg:w-10/12 mx-auto my-40',
                'title' => 'px-6 font-sans',
                'component' => 'lg:w-4/10 px-6'
            ],
        ],
    ],
];
