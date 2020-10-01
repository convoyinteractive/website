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
                        'px-6 md:px-10 sm:px-20 xl:px-screen-20',
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
                        'md:px-10 xl:px-screen-10',
                        'pt-50 xl:pt-screen-50',
                        'pb-30 xl:pb-screen-30',
                        'bg-black text-white',
                    ],
                ],
                'title' => [
                    'class' => [
                        'mb-10 xl:mb-screen-10',
                        'px-6 md:px-10 xl:px-screen-10',
                        'font-sans',
                        'text-xl md:text-3xl xl:text-like-3xl',
                        'font-semibold',
                        'ml-auto',
                        'lg:w-8/12',
                    ],
                ],
                'component' => [
                    'class' => [
                        'mx-auto',
                        'lg:w-10/12',
                        'flex',
                        'flex-wrap',
                        'items-start',
                    ],
                ],
                'term' => [
                    'class' => [
                        'md:text-xl xl:text-like-xl',
                        'font-sans font-semibold',
                        'md:w-3/10',
                        'mb-10 md:mb-20 xl:mb-screen-20',
                        'px-6 md:px-10 xl:px-screen-10',
                    ],
                ],
                'item' => [
                    'class' => [
                        'md:w-7/10',
                        'mb-20 xl:mb-screen-20',
                        'px-6 md:px-10 xl:px-screen-10',
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
                    ],
                ],
            ],
            'group' => [
                'component' => [
                    'class' => [
                        'flex',
                        'flex-wrap',
                        'px-5 xl:px-screen-5',
                    ],
                ],

                'item' => [
                    'class' => [
                        'p-5 xl:p-screen-5',
                        'w-6/12'
                    ],
                ],

                'items' => [
                    'image' => [
                        'class' => [
                            'h-full',
                            'flex flex-col',
                            'justify-center',
                        ],
                    ],
                    'screen' => [
                        'class' => [
                            'h-full',
                            'flex flex-col',
                            'justify-center',
                            'p-20',
                            'bg-gray',
                        ],
                    ],
                    'phone' => [
                        'class' => [
                            'h-full',
                            'flex flex-col',
                            'justify-center',
                            'p-20',
                            'bg-gray',
                        ],
                    ],
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
                'item' => [
                    'class' => [
                        'pointer-events-none',
                        'w-full',
                    ],
                ]
            ],
            'screen' => [
                'wrap' => [
                    'class' => [
                        'md:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-30 xl:my-screen-30'
                    ],
                ],
                'component' => [
                    'class' => [
                        'p-10 xl:p-screen-10',
                    ]
                ]
            ],
            'impressions' => [
                'wrap' => [
                    'class' => [
                        'flex',
                        'flex-col',
                        'justify-center',
                        'h-screen',
                        'overflow-hidden',
                        'px-6 md:px-10 xl:px-screen-10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'flex',
                        'h-full',
                        'py-20',
                        'space-x-10',
                    ],
                ],
                'item' => [
                    'class' => [
                        'w-full lg:w-10/12',
                        'flex-shrink-0',
                        'bg-gray',
                    ],
                ],
                'items' => [
                    'image' => [
                        'class' => [
                            'h-full',
                            'flex flex-col',
                            'justify-center',
                        ]
                    ],
                    'screen' => [
                        'class' => [
                            'p-20',
                            'h-full',
                            'flex flex-col',
                            'justify-center',
                        ]
                    ]
                ]
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
                        'text-xl md:text-2xl xl:text-like-2xl',
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
                    'class' => [
                        'px-6 md:px-10 sm:px-20 xl:px-screen-20'
                    ],
                ],
            ],
            'markdown' => [
                'wrap' => [
                    'class' => [
                        'md:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-30 xl:my-screen-30',
                        'md:flex',
                        'md:items-start',
                        'md:justify-end',
                        'lg:w-10/12',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-6 md:px-10 xl:px-screen-10',
                        'pb-10 xl:pb-screen-10',
                        'font-sans',
                        'text-xl md:text-2xl xl:text-like-2xl',
                        'font-semibold',
                        'md:w-3/10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'markdown',
                        'px-6 md:px-10 xl:px-screen-10',
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
                    'v-theme' => [
                        'true'
                    ],
                ],
                'component' => [
                    'class' => [
                        'block lg:flex flex-row-reverse',
                        'items-center justify-between',
                        'sm:px-10 xl:px-screen-10',
                        'lg:w-10/12',
                    ],
                ],
                'body' => [
                    'class' => [
                        'block',
                        'px-10',
                        'my-10',
                        'lg:w-7/10',
                        'font-sans font-semibold',
                        'text-xl md:text-3xl xl:text-like-3xl',
                        'leading-normal',
                    ],
                ],
                'author' => [
                    'class' => [
                        'block',
                        'px-10',
                        'my-10',
                        'font-sans',
                        'lg:w-3/10 xl:w-2/10'
                    ],
                ],
            ],
            'awards' => [
                'title' => [
                    'class' => [
                        'mb-10 xl:mb-screen-10',
                        'font-sans',
                        'text-xl md:text-3xl xl:text-like-3xl',
                        'font-semibold',
                        'text-center',
                    ],
                ],
                'component' => [
                    'class' => [
                        'flex flex-wrap',
                        'px-5 sm:px-15 xl:px-screen-15',
                    ],
                ],
                'items' => [
                    'class' => [
                        'flex flex-col',
                        'justify-between',
                        'w-2/12',
                        'p-5 xl:p-screen-5',
                    ],
                ],
                'card' => [
                    'class' => [
                        'relative',
                        'flex',
                        'flex-shrink-0',
                        'h-full',
                        'items-center',
                        'justify-center',
                        'bg-gray',
                        'w-full',
                        'p-10 xl:p-screen-10',
                    ],
                ],
                'caption' => [
                    'class' => [
                        'mt-5',
                        'text-sm',
                        'text-center',
                        'font-sans',
                    ],
                ],
                'count' => [
                    'class' => [
                        'absolute',
                        'flex',
                        'items-center justify-center',
                        'text-xs',
                        'font-sans',
                        'transform -translate-y-1/2',
                        'top-0 right-0',
                        'mr-5 xl:mr-screen-5',
                        'w-8 h-8',
                        'rounded-full',
                        'bg-green',
                        'text-white',
                    ],
                ],
            ],
            'clients' => [
                'title' => [
                    'class' => [
                        'px-6 mb-10 xl:mb-screen-10',
                        'font-sans',
                        'text-xl md:text-3xl xl:text-like-3xl',
                        'font-semibold',
                        'text-center',
                    ],
                ],
                'component' => [
                    'class' => [
                        'flex flex-wrap',
                        'px-3 md:px-5 sm:px-15 xl:px-screen-15',
                    ],
                ],
                'items' => [
                    'class' => [
                        'w-6/12 md:w-4/12 lg:w-3/12',
                        'p-3 md:p-5 xl:p-screen-5',
                    ],
                ],
                'card' => [
                    'class' => [
                        'flex',
                        'items-center',
                        'justify-center',
                        'bg-gray',
                        'w-full h-full',
                        'px-10 py-10 lg:py-20 xl:px-screen-10 xl:py-screen-20',
                    ],
                ],
            ],
            'services' => [
                'wrap' => [
                    'class' => [
                        'md:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-30 xl:my-screen-30',
                        'md:flex',
                        'md:items-start',
                        'md:justify-end',
                        'lg:w-10/12',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-6 md:px-10 xl:px-screen-10',
                        'pb-10 xl:pb-screen-10',
                        'font-sans',
                        'text-xl md:text-2xl xl:text-like-2xl',
                        'font-semibold',
                        'md:w-3/10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'block sm:flex flex-wrap',
                        'px-6 sm:px-3 md:px-5 xl:px-screen-5',
                        'md:w-7/10',
                    ],
                ],
                'item' => [
                    'class' => [
                        'sm:w-5/10',
                        'sm:px-3 md:px-5 xl:px-screen-5',
                        '-mb-05',
                    ],
                ],
                'term' => [
                    'class' => [
                        'h-full',
                        'border-dotted',
                        'border-t-2 border-b-2',
                        'border-gray-mid',
                        'py-10 xl:py-screen-10',
                    ],
                ],
            ],
            'portfolio' => [
                'wrap' => [
                    'class' => [
                        'flex',
                        'flex-col',
                        'justify-center',
                        'min-h-screen',
                        'overflow-hidden',
                        'px-6 md:px-10 xl:px-screen-10',
                        'mb-40',
                        'bg-black text-white',
                    ],
                ],
                'title' => [
                    'class' => [
                        'mb-20',
                        'text-center',
                        'font-sans',
                        'font-semibold',
                        'text-xl md:text-3xl xl:text-screen-3xl',
                    ],
                ],
                'component' => [
                    'class' => [
                        'flex',
                        'space-x-10',
                    ],
                ],
                'item' => [
                    'class' => [
                        'p-10',
                        'bg-white text-black',
                        'w-8/10 lg:w-3/10',
                        'flex-shrink-0',
                    ],
                ],
                'heading' => [
                    'class' => [
                        'font-sans',
                        'font-semibold',
                        'text-xl md:text-2xl xl:text-screen-2xl',
                        'mb-10',
                    ],
                ],
                'items' => [
                    'markdown' => [
                        'class' => [
                            //
                        ],
                    ],
                ],
            ],
            'process' => [
                'wrap' => [
                    'class' => [
                        'my-20',
                        'py-20',
                        'bg-black text-white',
                    ]
                ],
            ]
        ],

        'home' => [
            'quote' => [
                'wrap' => [
                    'class' => [
                        'px-6 md:px-10 xl:px-screen-10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'mx-auto',
                        'lg:w-10/12',
                        'sm:px-10 xl:px-screen-10',
                    ],
                ],
                'body' => [
                    'class' => [
                        'font-sans font-semibold',
                        'text-xl md:text-3xl xl:text-like-3xl',
                        'leading-normal',
                    ],
                ],
                'author' => [
                    'class' => [
                        'block',
                        'font-sans font-normal',
                        'text-base md:text-xl',
                    ],
                ],
            ],
            'services' => [
                'wrap' => [
                    'class' => [
                        'px-6 md:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-30 xl:my-screen-30',
                        'lg:w-10/12',
                    ],
                ],
                'component' => [
                    'class' => [
                        'sm:px-10 xl:px-screen-10',
                        'lg:w-7/10',
                        'font-sans',
                        'font-semibold',
                        'text-xl md:text-3xl xl:text-like-3xl',
                    ],
                ],
                'item' => [
                    'class' => [
                        'inline-block',
                        'mr-5 xl:mr-screen-5'
                    ],
                ],
                'term' => [
                    'class' => [
                        //
                    ],
                ],
            ],
        ],

        'case' => [
            'details' => [
                'wrap' => [
                    'class' => [
                        'flex',
                        'items-center',
                        'md:w-10/12',
                        'mx-auto',
                        'mt-50 xl:mt-screen-50',
                        'mb-20 xl:mb-screen-20'
                    ],
                ],
                'aside' => [
                    'class' => [
                        'md:w-3/10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'md:w-7/10',
                    ],
                ],
            ],
            'markdown' => [
                'wrap' => [
                    'class' => [
                        'lg:w-8/12',
                        'mx-auto',
                        'px-6 md:px-10 xl:px-screen-10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'markdown',
                    ],
                ],
                'title' => [
                    'class' => [
                        'font-sans font-semibold',
                        'mb-10 xl:mb-screen-10',
                    ],
                ],
            ],
            // 'image' => [
            //     'item' => [
            //         'class' => [
            //             'pointer-events-none',
            //             'max-h-full max-w-full',
            //             'mx-auto',
            //         ],
            //     ]
            // ]
        ],

        'services' => [
            'hero' => [
                'wrap' => [
                    'class' => [
                        'px-6 md:px-10 xl:px-screen-10',
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
                ],
            ],
        ],
    ],
];
