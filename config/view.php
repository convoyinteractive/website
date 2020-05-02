<?php

return [

    'paths' => [
        base_path('resources/views'),
    ],

    'compiled' => realpath(storage_path('cache/views')),

    'styles' => [
        'default' => [
            'waypoints' => [
                'daynight' => 'bg-green-soft text-black',
            ],
            'hero' => [
                'wrap' => 'block',
                'title' => 'px-6 sm:px-12 mx-auto my-40 lg:w-10/12',
                'component' => 'block w-full pointer-events-none'
            ],
            'gallery' => [
                'component' => 'flex items-center overflow-x-auto space-x-12 pb-6 -mb-6',
            ],
            'image' => [
                'component' => 'mx-auto max-w-6xl',
            ],
            'list' => [
                'wrap' => 'sm:px-6 mx-auto my-20 md:flex md:items-start md:justify-end lg:w-10/12',
                'title' => 'px-6 pb-10 md:sticky top-32 font-sans text-2xl xl:text-like-2xl font-semibold md:w-3/10',
                'component' => 'px-6 md:w-7/10',
            ],
            'markdown' => [
                'wrap' => 'sm:px-6 mx-auto my-20 md:flex md:items-start md:justify-end lg:w-10/12',
                'title' => 'px-6 pb-10 font-sans text-2xl xl:text-like-2xl font-semibold md:w-3/10',
                'component' => 'px-6 md:w-7/10',
            ],
            'quote' => [
                'wrap' => 'w-full min-h-screen flex items-center daynight',
                'component' => 'sm:px-6',
            ],
        ],

        'services' => [
            'hero' => [
                'wrap' => 'px-6 md:flex mx-auto my-40 md:items-center md:justify-between lg:w-10/12',
                'title' => 'sm:px-6 lg:w-6/10',
                'component' => 'sm:px-6 lg:w-4/10'
            ],

            'definition' => [
                'wrap' => 'md:px-12 mx-auto my-40 lg:w-10/12',
                'title' => 'mb-10 font-sans text-3xl xl:text-like-3xl font-semibold text-center',
                'component' => 'px-6 py-12 sm:px-12 lg:px-32 lg:py-20 xl:px-40 mx-auto bg-green-soft',
            ],
        ],
    ],
];
