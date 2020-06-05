<?php

return [

    'paths' => [
        base_path('resources/views'),
    ],

    'compiled' => realpath(storage_path('cache/views')),

    'attributes' => [
        'default' => [
            'hero' => [
                'wrap' => [
                    'class' => [
                        'block',
                        'my-50 xl:my-screen-50',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-10 sm:px-20 xl:px-screen-20',
                        'mx-auto',
                        'my-50 xl:my-screen-50',
                        'lg:w-10/12',
                    ],
                ],
                'component' => [
                    'class' => [
                        'block',
                        'w-full',
                        'pointer-events-none',
                    ],
                ],
            ],
            'definition' => [
                'wrap' => [
                    'class' => [
                        'px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-50 xl:my-screen-50',
                    ],
                ],
                'title' => [
                    'class' => [
                        'mb-10 xl:mb-screen-10',
                        'font-sans',
                        'text-3xl xl:text-like-3xl',
                        'font-semibold',
                        'text-center',
                    ],
                ],
                'component' => [
                    'class' => [
                        'sm:px-10 sm:px-20 xl:px-screen-10',
                        'py-10 lg:py-20 xl:py-screen-20',
                        'mx-auto',
                        'lg:w-10/12',
                    ],
                ],
                'term' => [
                    'class' => [
                        'mb-10',
                        'text-xl xl:text-like-xl',
                        'font-sans font-semibold',
                    ],
                ],
                'item' => [
                    'class' => [
                        'mb-10',
                        'pb-10',
                        'border-b-2 border-dotted',
                    ],
                ],
                'items' => [
                    'markdown' => [
                        'class' => ['markdown'],
                    ],
                ],
            ],
            'gallery' => [
                'wrap' => [
                    'class' => [
                        'overflow-hidden',
                        'my-50 xl:my-screen-50',
                    ],
                ],
                'component' => [
                    'class' => [
                        'flex',
                        'items-center',
                        'overflow-x-auto',
                        'space-x-30 xl:space-x-screen-30',
                        'pb-10',
                        '-mb-10',
                    ],
                ],
                'items' => [
                    'image' => [
                        'class' => [
                            'w-6/10 lg:w-4/10',
                            'flex-shrink-0',
                        ],
                    ]
                ]
            ],
            'image' => [
                'wrap' => [
                    'class' => [
                        'my-50 xl:my-screen-50',
                    ],
                ],
                'component' => [
                    'class' => [
                        'mx-auto',
                        'max-w-6xl',
                    ],
                ],
            ],
            'list' => [
                'wrap' => [
                    'class' => [
                        'sm:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-50 xl:my-screen-50',
                        'md:flex',
                        'md:items-start',
                        'md:justify-end',
                        'lg:w-10/12',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-10 xl:px-screen-10',
                        'pb-10 xl:pb-screen-10',
                        'md:sticky',
                        'top-32',
                        'font-sans',
                        'text-2xl xl:text-like-2xl',
                        'font-semibold',
                        'md:w-3/10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'px-10 xl:px-screen-10',
                        'md:w-7/10',
                    ],
                ],
                'items' => [
                    'markdown' => [
                        'class' => ['markdown'],
                    ],
                ],
            ],
            'lottie' => [
                'component' => [
                    'mode' => ['onscroll'],
                ],
            ],
            'markdown' => [
                'wrap' => [
                    'class' => [
                        'sm:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-30 xl:my-screen-30',
                        'md:flex',
                        'md:items-start',
                        'md:justify-end',
                        'lg:w-10/12',
                    ]
                ],
                'title' => [
                    'class' => [
                        'px-10 xl:px-screen-10',
                        'pb-10 xl:pb-screen-10',
                        'font-sans',
                        'text-2xl xl:text-like-2xl',
                        'font-semibold',
                        'md:w-3/10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'markdown',
                        'px-10 xl:px-screen-10',
                        'md:w-7/10',
                    ],
                ],
            ],
            'quote' => [
                'wrap' => [
                    'class' => [
                        'w-full',
                        'min-h-screen',
                        'flex',
                        'items-center justify-center',
                    ],
                ],
                'component' => [
                    'class' => [
                        'flex flex-row-reverse',
                        'items-center justify-between',
                        'sm:px-10 xl:px-screen-10',
                        'w-10/12',
                    ],
                ],
                'body' => [
                    'class' => [
                        'block',
                        'px-10',
                        'my-10',
                        'lg:w-7/10',
                        'font-sans font-semibold',
                        'text-3xl xl:text-like-3xl',
                        'leading-normal',
                    ],
                ],
                'author' => [
                    'class' => [
                        'block',
                        'px-10',
                        'my-10',
                        'lg:w-3/10 xl:w-2/10'
                    ],
                ],
            ],
            'relation' => [
                'clients' => [
                    'title' => [
                        'class' => [
                            'mb-10 xl:mb-screen-10',
                            'font-sans',
                            'text-3xl xl:text-like-3xl',
                            'font-semibold',
                            'text-center',
                        ],
                    ]
                ],

                'services' => [
                    'title' => [
                        'class' => [
                            'mb-10 xl:mb-screen-10',
                            'font-sans',
                            'text-3xl xl:text-like-3xl',
                            'font-semibold',
                            'text-center',
                        ],
                    ],
                ],
            ],
        ],

        'case' => [
            'gallery' => [
                'wrap' => [
                    'class' => [
                        'overflow-hidden',
                        'my-50 xl:my-screen-50',
                    ],
                ],
                'component' => [
                    'class' => [
                        'px-10 sm:px-20 xl:px-screen-10',
                        'flex',
                        'items-center',
                        'space-x-30 xl:space-x-screen-30',
                        'carousel',
                    ],
                ],
            ],
        ],

        'services' => [
            'hero' => [
                'wrap' => [
                    'class' => [
                        'px-10 xl:px-screen-10',
                        'md:flex',
                        'md:items-center',
                        'md:justify-between',
                        'mx-auto',
                        'my-40 xl:my-screen-40',
                        'lg:w-10/12',
                    ],
                ],
                'title' => [
                    'class' => [
                        'sm:px-10 xl:px-screen-10',
                        'lg:w-6/10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'sm:px-10 xl:px-screen-10',
                        'lg:w-4/10',
                    ],
                    'mode' => ['inview']
                ],
            ],
        ],
    ],
];
