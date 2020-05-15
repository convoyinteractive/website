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
                'title' => 'px-10 sm:px-20 mx-auto my-50 lg:w-10/12',
                'component' => 'block w-full pointer-events-none'
            ],
            'definition' => [
                'wrap' => 'px-10 mx-auto my-40 daynight',
                'title' => 'mb-10 font-sans text-3xl xl:text-like-3xl font-semibold text-center',
                'component' => 'sm:px-10 py-10 sm:px-20 lg:py-20 mx-auto lg:w-10/12',
            ],
            'gallery' => [
                'wrap' => 'overflow-hidden',
                'component' => 'flex items-center overflow-x-auto space-x-10 pb-10 -mb-10',
            ],
            'image' => [
                'component' => 'mx-auto max-w-6xl',
            ],
            'list' => [
                'wrap' => 'sm:px-10 mx-auto my-20 md:flex md:items-start md:justify-end lg:w-10/12',
                'title' => 'px-10 pb-10 md:sticky top-32 font-sans text-2xl xl:text-like-2xl font-semibold md:w-3/10',
                'component' => 'px-10 md:w-7/10',
            ],
            'markdown' => [
                'wrap' => 'sm:px-10 mx-auto my-20 md:flex md:items-start md:justify-end lg:w-10/12',
                'title' => 'px-10 pb-10 font-sans text-2xl xl:text-like-2xl font-semibold md:w-3/10',
                'component' => 'px-10 md:w-7/10',
            ],
            'quote' => [
                'wrap' => 'w-full min-h-screen flex items-center daynight',
                'component' => 'sm:px-10',
            ],
        ],

        'case' => [
            'gallery' => [
                'wrap' => 'overflow-hidden',
                'component' => 'px-10 sm:px-20 flex items-center space-x-10 carousel',
            ],
        ],

        'services' => [
            'hero' => [
                'wrap' => 'px-10 md:flex mx-auto my-40 md:items-center md:justify-between lg:w-10/12',
                'title' => 'sm:px-10 lg:w-6/10',
                'component' => 'sm:px-10 lg:w-4/10'
            ],
        ],
    ],
];
