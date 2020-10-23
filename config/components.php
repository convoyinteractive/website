<?php

return [
    'attributes' => [

        // Here we'll define the default attributes for our components. All components will
        // fallback to this attributes if there is nothing defined for the specific template.
        'default' => [
            'page' => [
                'title' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'font-bold font-hero leading-tight',
                        'text-4xl sm:text-5xl md:text-6xl xl:text-like-6xl',
                    ]
                ],
                'subtitle' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'block font-sans font-light',
                        'text-sm xl:text-like-sm',
                    ],
                ]
            ],

            'hero' => [
                'title' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-40 md:my-70 xl:my-screen-70',
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

            'image' => [
                'wrap' => [
                    'class' => [
                        'my-50 xl:my-screen-50',
                        'mx-auto',
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'lg:w-10/12',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'pb-10 xl:pb-screen-10',
                        'font-sans font-semibold',
                        'text-xl md:text-2xl xl:text-like-2xl',
                        'text-center',
                    ]
                ],
                'component' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'w-full',
                    ],
                ],
                'item' => [
                    'class' => [
                        'pointer-events-none',
                        'max-w-full max-h-full',
                        'mx-auto',
                    ],
                ]
            ],

            'video' => [
                'wrap' => [
                    'class' => [
                        'block',
                        'my-50 xl:my-screen-50',
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'mx-auto lg:w-10/12',
                    ],
                ],
                'component' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'w-full block'
                    ]
                ],
                'controls' => [
                    'class' => [
                        'p-6 space-y-6',
                        'text-white'
                    ],
                ],
            ],

            'lottie' => [
                'wrap' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-30 xl:my-screen-30',
                        'lg:w-10/12',
                        'md:flex md:items-start md:justify-end',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'pb-10 xl:pb-screen-10',
                        'text-xl md:text-2xl xl:text-like-2xl',
                        'font-sans font-semibold',
                        'md:w-3/10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'md:w-7/10',
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

            'markdown' => [
                'wrap' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-30 xl:my-screen-30',
                        'lg:w-10/12',
                        'md:flex md:items-start md:justify-end',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'pb-10 xl:pb-screen-10',
                        'text-xl md:text-2xl xl:text-like-2xl',
                        'font-sans font-semibold',
                        'md:w-3/10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'markdown',
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'md:w-7/10',
                    ],
                ],
            ],

            'quote' => [
                'wrap' => [
                    'class' => [
                        'w-full min-h-screen',
                        'flex items-center justify-center',
                    ],
                    'v-theme' => [
                        'true'
                    ],
                ],
                'component' => [
                    'class' => [
                        'block lg:flex flex-row-reverse',
                        'items-center justify-between',
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'lg:w-10/12',
                    ],
                ],
                'body' => [
                    'class' => [
                        'block',
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'lg:w-7/10',
                        'font-sans font-semibold',
                        'text-xl md:text-3xl xl:text-like-3xl',
                        'leading-normal',
                    ],
                ],
                'author' => [
                    'class' => [
                        'block',
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'font-sans',
                        'lg:w-3/10 xl:w-2/10',
                    ],
                ],
            ],

            'list' => [
                'wrap' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-30 xl:my-screen-30',
                        'lg:w-10/12',
                        'md:flex md:items-start md:justify-end',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'pb-10 xl:pb-screen-10',
                        'text-xl md:text-2xl xl:text-like-2xl',
                        'font-sans font-semibold',
                        'md:w-3/10',
                        'md:sticky top-32',
                    ],
                ],
                'component' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'md:w-7/10',
                    ],
                ],
                'items' => [
                    'markdown' => [
                        'class' => ['markdown'],
                    ],
                ],
            ],

            'definition' => [
                'wrap' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'pt-50 xl:pt-screen-50',
                        'pb-30 xl:pb-screen-30',
                        'bg-black text-white',
                    ],
                ],
                'title' => [
                    'class' => [
                        'mb-10 xl:mb-screen-10',
                        'px-6 md:px-10 xl:px-screen-10',
                        'font-sans font-semibold',
                        'text-xl md:text-3xl xl:text-like-3xl',
                        'ml-auto',
                        'lg:w-8/12',
                    ],
                ],
                'component' => [
                    'class' => [
                        'mx-auto',
                        'flex flex-wrap items-start',
                        'lg:w-10/12',
                    ],
                ],
                'term' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'my-15 xl:mb-screen-15',
                        'font-sans font-semibold',
                        'md:text-xl xl:text-like-xl',
                        'md:w-3/10',
                    ],
                ],
                'item' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'my-15 xl:mb-screen-15',
                        'md:w-7/10',
                    ],
                ],
                'items' => [
                    'markdown' => [
                        'class' => ['markdown'],
                    ],
                ],
            ],

            'group' => [
                'wrap' => [
                    'class' => [
                        'my-50 xl:my-screen-50',
                        'px-3 md:px-5 lg:px-10 xl:px-screen-10'
                    ],
                ],
                'component' => [
                    'class' => [
                        'flex',
                        'flex-wrap',
                    ],
                ],

                'item' => [
                    'class' => [
                        'w-full',
                        'p-3 md:p-5 lg:p-10 xl:p-screen-10',
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

            'screen' => [
                'wrap' => [
                    'class' => [
                        'my-50 xl:my-screen-50',
                        'px-6 md:px-10 lg:px-20 xl:px-screen-20',
                    ],
                ],
                'component' => [
                    'class' => [
                        'p-6 md:p-10 lg:p-20 xl:p-screen-20',
                    ]
                ],
                'item' => [
                    'class' => [
                        'pointer-events-none',
                        'max-w-full max-h-full',
                        'mx-auto my-auto',
                        'shadow-lg',
                    ],
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

            'process' => [
                'wrap' => [
                    'class' => [
                        'my-20',
                        'py-20',
                        'bg-black text-white',
                    ]
                ],
                'lottie' => [
                    'wrap' => [
                        'class' => [
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'my-50 xl:my-screen-50',
                        ],
                    ],
                    'component' => [
                        'class' => [
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'w-full',
                        ],
                    ],
                ],
                'markdown' => [
                    'wrap' => [
                        'class' => [
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'mx-auto',
                            'my-30 xl:my-screen-30',
                            'lg:w-10/12',
                            'md:flex md:items-start md:justify-end',
                        ],
                    ],
                    'title' => [
                        'class' => [
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'pb-10 xl:pb-screen-10',
                            'text-xl md:text-2xl xl:text-like-2xl',
                            'font-sans font-semibold',
                            'md:w-3/10',
                        ],
                    ],
                    'component' => [
                        'class' => [
                            'markdown',
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'md:w-7/10',
                        ],
                    ],
                ],
            ],

            'services' => [
                'wrap' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-50 xl:my-screen-50',
                        'md:flex md:items-start md:justify-end',
                        'lg:w-10/12',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'pb-10 xl:pb-screen-10',
                        'font-sans font-semibold',
                        'text-xl md:text-2xl xl:text-like-2xl',
                        'md:w-3/10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'block sm:flex flex-wrap',
                        'md:w-7/10',
                    ],
                ],
                'item' => [
                    'class' => [
                        'sm:w-5/10',
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
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

            'awards' => [
                'wrap' => [
                    'class' => [
                        'my-50 xl:my-screen-50',
                    ],
                ],
                'title' => [
                    'class' => [
                        'mb-10 xl:mb-screen-10',
                        'font-sans font-semibold',
                        'text-xl md:text-3xl xl:text-like-3xl',
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
                        'flex flex-col',
                        'justify-between',
                        'w-6/12 md:w-4/12 lg:w-2/12',
                        'p-5 xl:p-screen-5',
                        'mb-15',
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
                'wrap' => [
                    'class' => [
                        'my-50 xl:my-screen-50',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-6 mb-10 xl:mb-screen-10',
                        'font-sans font-semibold',
                        'text-xl md:text-3xl xl:text-like-3xl',
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

            'portfolio' => [
                'wrap' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'mb-40',
                        'flex flex-col justify-center',
                        'min-h-screen',
                        'overflow-hidden',
                        'bg-black text-white',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'mb-20',
                        'font-sans font-semibold',
                        'text-xl md:text-3xl xl:text-screen-3xl',
                        'text-center',
                    ],
                ],
                'component' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'flex',
                        'space-x-6 md:space-x-10 xl:space-x-screen-10',
                    ],
                ],
                'item' => [
                    'class' => [
                        'p-10',
                        'flex-shrink-0',
                        'w-8/10 lg:w-3/10',
                        'bg-white text-black',
                    ],
                ],
                'heading' => [
                    'class' => [
                        'font-sans font-semibold',
                        'text-xl md:text-2xl xl:text-screen-2xl',
                        'mb-10',
                    ],
                ],
                'items' => [
                    'markdown' => [
                        'class' => [
                            'markdown'
                        ],
                    ],
                ],
            ],
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
                        'my-50 xl:my-screen-50',
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

        // Here we'll define the attributes for our components if they are rendered within the case template.
        'case' => [
            'details' => [
                'wrap' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'mt-50 xl:mt-screen-50',
                        'mb-20 xl:mb-screen-20',
                        'mx-auto',
                        'md:flex md:items-center md:justify-between',
                        'lg:w-10/12',
                        'font-sans font-semibold',
                    ],
                ],
                'aside' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'hidden md:block',
                        'space-y-10 xl:space-y-screen-10',
                        'md:w-3/10',
                        'text-sm xl:text-like-sm',
                        'leading-loose',
                    ],
                ],
                'component' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'md:w-7/10',
                    ],
                ],
            ],
            'markdown' => [
                'wrap' => [
                    'class' => [
                        'lg:w-8/12',
                        'mx-auto',
                        'px-6 md:px-10 sm:px-20 xl:px-screen-20',
                        'my-50 xl:my-screen-50',
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
        ],

        // Here we'll define the attributes for our components if they are rendered within the services template.
        'services' => [
            'hero' => [
                'wrap' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'my-50 xl:my-screen-50',
                        'mx-auto',
                        'md:flex md:items-center md:justify-between',
                        'lg:w-10/12',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'lg:w-6/10',
                    ],
                ],
                'component' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'lg:w-4/10',
                    ],
                ],
            ],
        ],
    ],
];
