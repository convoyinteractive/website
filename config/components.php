<?php

return [
    'attributes' => [

        // Here we'll define the default attributes for our components. All components will
        // fall back to this attributes if there is nothing defined for a specific template.
        'default' => [

            // default.awards
            'awards' => [
                'wrap' => [
                    'class' => [
                        'my-50',
                        'xl:my-screen-50',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-6 mb-10 font-sans font-semibold text-center text-xl',
                        'md:text-3xl',
                        'xl:text-like-3xl xl:mb-screen-10',
                    ],
                ],
                'items' => [
                    'class' => [
                        'flex flex-wrap px-3',
                        'sm:px-15',
                        'md:px-5',
                        'xl:px-screen-15',
                    ],
                ],
                'item' => [
                    'class' => [
                        'w-6/12 p-3',
                        'md:w-4/12 md:p-5',
                        'lg:w-2/12',
                        'xl:p-screen-5',
                    ],
                ],
                'card' => [
                    'class' => [
                        'relative flex items-center justify-center bg-gray w-full h-full p-10',
                        'xl:p-screen-10',
                    ],
                ],
                'caption' => [
                    'class' => [
                        'block mt-5 text-sm text-center font-sans',
                    ],
                ],
                'count' => [
                    'class' => [
                        'rounded-full bg-green text-white text-xs font-sans',
                        'absolute transform -translate-y-1/2 top-0 right-0',
                        'flex items-center justify-center w-8 h-8 mr-5',
                        'xl:mr-screen-5',
                    ],
                ],
            ],

            // default.clients
            'clients' => [
                'wrap' => [
                    'class' => [
                        'my-50',
                        'xl:my-screen-50',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-6 mb-10 font-sans font-semibold text-center text-xl',
                        'md:text-3xl',
                        'xl:text-like-3xl xl:mb-screen-10',
                    ],
                ],
                'items' => [
                    'class' => [
                        'flex flex-wrap px-3',
                        'sm:px-15',
                        'md:px-5',
                        'xl:px-screen-15',
                    ],
                ],
                'item' => [
                    'class' => [
                        'w-6/12 p-3',
                        'md:w-4/12 md:p-5',
                        'lg:w-3/12',
                        'xl:p-screen-5',
                    ],
                ],
                'card' => [
                    'class' => [
                        'flex items-center justify-center bg-gray w-full h-full p-10',
                        'lg:py-20',
                        'xl:px-screen-10 xl:py-screen-20',
                    ],
                ],
                'image' => [
                    'class' => [
                        'max-w-50 max-h-25',
                    ],
                ],
            ],

            // default.definition
            'definition' => [
                'wrap' => [
                    'class' => [
                        'px-3 pt-50 pb-30 bg-black text-white',
                        'sm:px-10',
                        'md:px-5',
                        'xl:px-screen-10 xl:pt-screen-50 xl:pb-screen-30'
                    ],
                ],
                'title' => [
                    'class' => [
                        'mb-10 px-6 font-sans font-semibold text-xl ml-auto',
                        'md:text-3xl md:px-10',
                        'lg:w-8/12',
                        'xl:mb-screen-10 xl:px-screen-10 xl:text-like-3xl',
                    ],
                ],
                'body' => [
                    'class' => [
                        'mx-auto flex flex-wrap items-start',
                        'lg:w-10/12',
                    ],
                ],
                'term' => [
                    'class' => [
                        'px-3 my-15 font-sans font-semibold',
                        'sm:px-10 ',
                        'md:px-5 md:w-3/10 md:text-xl',
                        'xl:px-screen-10 xl:mb-screen-15 xl:text-like-xl',
                    ],
                ],
                'item' => [
                    'class' => [
                        'px-3 my-15',
                        'sm:px-10 ',
                        'md:px-5 md:w-7/10',
                        'xl:px-screen-10 xl:mb-screen-15'
                    ],
                ],
                'items' => [
                    'markdown' => [
                        'body' => [
                            'class' => ['markdown'],
                        ]
                    ],
                ],
            ],

            // default.gallery
            'gallery' => [
                'wrap' => [
                    'class' => [
                        'overflow-hidden my-50',
                        'xl:my-screen-50',
                    ],
                ],
                'body' => [
                    'class' => [
                        'pb-10 -mb-10 flex items-center overflow-x-auto space-x-30',
                        'xl:space-x-screen-30',
                    ],
                ],
                'items' => [

                    // default.gallery.items.image
                    'image' => [
                        'wrap' => [
                            'class' => [
                                'w-6/10 flex-shrink-0',
                                'lg:w-4/10',
                            ],
                        ],
                        'item' => [
                            'class' => [
                                'pointer-events-none w-full',
                            ],
                        ],
                    ],
                ],
            ],

            //  defaults.group
            'group' => [
                'wrap' => [
                    'class' => [
                        'my-50 xl:my-screen-50',
                        'px-3 md:px-5 lg:px-10 xl:px-screen-10'
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
                'grid' => [
                    'class' => [
                        'flex flex-wrap',
                    ],
                ],
                'item' => [
                    'class' => [
                        'w-full',
                        'p-3 md:p-5 lg:p-10 xl:p-screen-10',
                    ],
                ],
                'caption' => [
                    'class' => [
                        'px-3 md:px-5 lg:px-10 xl:px-screen-10',
                        'font-sans font-semibold',
                        'text-sm xl:text-like-sm',
                        'text-center',
                    ]
                ],
                'items' => [

                    // default.group.items.phone
                    'phone' => [
                        'canvas' => [
                            'class' => [
                                'p-15',
                                'xl:p-screen-15',
                            ]
                        ]
                    ],
                ]
            ],

            // default.image
            'image' => [
                'wrap' => [
                    'class' => [
                        'mx-auto my-50 px-3',
                        'sm:px-10',
                        'md:px-5',
                        'lg:w-10/12',
                        'xl:px-screen-10 xl:my-screen-50',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 pb-10 font-sans font-semibold text-xl text-center',
                        'sm:px-10',
                        'md:px-5 md:text-2xl',
                        'xl:text-like-2xl xl:px-screen-10 xl:pb-screen-10',
                    ]
                ],
                'figure' => [
                    'class' => [
                        'px-3 w-full',
                        'sm:px-10',
                        'md:px-5',
                        'xl:px-screen-10',
                    ],
                ],
                'item' => [
                    'class' => [
                        'pointer-events-none max-w-full max-h-full mx-auto',
                    ],
                ],
                'caption' => [
                    'class' => [
                        'px-10 mt-2 font-sans text-center text-sm',
                        'xl:text-like-sm',
                    ]
                ]
            ],

            // default.impressions
            'impressions' => [
                'wrap' => [
                    'class' => [
                        'flex flex-col justify-center h-screen overflow-hidden px-6',
                        'md:px-10',
                        'xl:px-screen-10',
                        'lg:px-20 xl:px-screen-20'
                    ],
                ],
                'stage' => [
                    'class' => [
                        'flex space-x-20',
                        'xl:space-x-screen-20'
                    ],
                ],
                'items' => [
                    'screen' => [
                        'wrap' => [
                            'class' => [
                                'w-full flex-shrink-0',
                                'lg:w-10/12'
                            ]
                        ],
                        'canvas' => [
                            'class' => [
                                'p-20',
                                'xl:p-screen-20',
                            ]
                        ]
                    ]
                ]
            ],

            // default.list
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
                'body' => [
                    'class' => [
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'md:w-7/10',
                    ],
                ],
                'item' => [
                    'class' => ['py-10 border-dotted border-t-2 border-black']
                ],
                'items' => [

                    // default.list.items.markdown
                    'markdown' => [
                        'body' => [
                            'class' => ['markdown'],
                        ]
                    ],
                ],
            ],

            // default.lottie
            'lottie' => [
                'wrap' => [
                    'class' => [
                        'px-3 my-30',
                        'sm:px-10',
                        'md:px-5 md:flex md:items-start md:justify-end',
                        'lg:w-10/12 lg:mx-auto',
                        'xl:px-screen-10 xl:my-screen-30',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 pb-10 text-xl font-sans font-semibold',
                        'sm:px-10',
                        'md:px-5 md:w-3/10 md:text-2xl',
                        'xl:px-screen-10 xl:pb-screen-10 xl:text-like-2xl',
                    ],
                ],
                'body' => [
                    'class' => [
                        'px-3',
                        'sm:px-10',
                        'md:px-5 md:w-7/10',
                        'xl:px-screen-10',
                    ],
                ],
            ],

            // default.markdown
            'markdown' => [
                'wrap' => [
                    'class' => [
                        'px-3 my-30',
                        'sm:px-10',
                        'md:px-5 md:flex md:items-start md:justify-end',
                        'lg:w-10/12 lg:mx-auto',
                        'xl:px-screen-10 xl:my-screen-30',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 pb-10 text-xl font-sans font-semibold',
                        'sm:px-10',
                        'md:px-5 md:w-3/10 md:text-2xl',
                        'xl:px-screen-10 xl:pb-screen-10 xl:text-like-2xl',
                    ],
                ],
                'body' => [
                    'class' => [
                        'px-3 markdown',
                        'sm:px-10',
                        'md:px-5 md:w-7/10',
                        'xl:px-screen-10',
                    ],
                ],
            ],

            // default.process
            'process' => [
                'wrap' => [
                    'class' => [
                        'my-20 py-20 bg-black text-white',
                    ]
                ],
                'items' => [

                    // default.process.items.lottie
                    'lottie' => [
                        'wrap' => [
                            'class' => [
                                'px-3 my-50',
                                'sm:px-10',
                                'md:px-5',
                                'xl:px-screen-10 xl:my-screen-50',
                            ],
                        ],
                        'body' => [
                            'class' => [
                                'px-3 w-full',
                                'sm:px-10',
                                'md:px-5',
                                'xl:px-screen-10',
                            ],
                        ],
                    ],

                    // default.process.items.markdown
                    'markdown' => [
                        'wrap' => [
                            'class' => [
                                'px-3 my-30',
                                'sm:px-10',
                                'md:px-5 md:flex md:items-start md:justify-end',
                                'lg:w-10/12 lg:mx-auto',
                                'xl:px-screen-10 xl:my-screen-30',
                            ],
                        ],
                        'title' => [
                            'class' => [
                                'px-3 pb-10 text-xl font-sans font-semibold',
                                'sm:px-10',
                                'md:px-5 md:w-3/10 md:text-2xl',
                                'xl:px-screen-10 xl:pb-screen-10 xl:text-like-2xl',
                            ],
                        ],
                        'body' => [
                            'class' => [
                                'px-3 markdown',
                                'sm:px-10',
                                'md:px-5 md:w-7/10',
                                'xl:px-screen-10',
                            ],
                        ],
                    ],
                ],
            ],


            'screen' => [
                'wrap' => [
                    'class' => [
                        'my-50 xl:my-screen-50',
                        'px-6 md:px-10 lg:px-20 xl:px-screen-20',
                    ],
                ],
                'canvas' => [
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
                ],
                'caption' => [
                    'px-10 font-sans text-center text-sm xl:text-like-sm'
                ]
            ],

            // default.services
            'services' => [
                'wrap' => [
                    'class' => [
                        'px-3 my-50 mx-auto',
                        'sm:px-10',
                        'md:px-5 md:flex md:items-start md:justify-end',
                        'lg:w-10/12',
                        'xl:my-screen-50 xl:px-screen-10',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 pb-10 text-xl font-sans font-semibold',
                        'sm:px-10',
                        'md:px-5 md:text-2xl md:w-3/10',
                        'xl:pb-screen-10 xl:px-screen-10 xl:text-like-2xl',
                    ],
                ],
                'items' => [
                    'class' => [
                        'block flex-wrap',
                        'sm:flex',
                        'md:w-7/10',
                    ],
                ],
                'item' => [
                    'class' => [
                        'px-3 -mb-05',
                        'sm:w-5/10 sm:px-10',
                        'md:px-5',
                        'xl:px-screen-10',
                    ],
                ],
                'term' => [
                    'class' => [
                        'h-full border-dotted border-t-2 border-b-2 border-gray-mid py-10',
                        'xl:py-screen-10',
                    ],
                ],
            ],

            // default.quote
            'quote' => [
                'wrap' => [
                    'class' => [
                        'w-full min-h-screen flex items-center justify-center',
                    ],
                    'v-theme' => [
                        'true'
                    ],
                ],
                'body' => [
                    'class' => [
                        'block px-3',
                        'sm:px-10',
                        'md:px-5',
                        'lg:flex lg:flex-row-reverse lg:items-center lg:justify-between lg:w-10/12',
                        'xl:px-screen-10',
                    ],
                ],
                'cite' => [
                    'class' => [
                        'block px-3 font-sans font-semibold leading-normal text-xl',
                        'sm:px-10',
                        'md:px-5 md:text-3xl',
                        'lg:w-7/10',
                        'xl:px-screen-10 xl:text-like-3xl',
                    ],
                ],
                'author' => [
                    'class' => [
                        'block px-3 font-sans mt-5',
                        'sm:px-10',
                        'md:px-5',
                        'lg:w-3/10 lg:mt-0',
                        'xl:px-screen-10 xl:w-2/10',
                    ],
                ],
                'author_name' => [
                    'class' => [
                        'block font-semibold',
                    ],
                ],
                'author_title' => [
                    'class' => [
                        'block text-sm',
                        'lg:text-like-sm',
                    ],
                ]
            ],



            //





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

        // Within explicit defined templates some components require spacial attributes. Here
        // we'll define overrides based on the current context. If an attribute doesn't exist
        // it will fall back to the default attributes.
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

        'case' => [

            // case.markdown
            'markdown' => [
                'wrap' => [
                    'class' => [
                        'px-6 mx-auto my-50',
                        'sm:px-20',
                        'md:px-10',
                        'lg:w-8/12',
                        'xl:my-screen-50 xl:px-screen-20',
                    ],
                ],
                'title' => [
                    'class' => [
                        'font-sans font-semibold mb-10',
                        'xl:mb-screen-10',
                    ],
                ],
                'body' => [
                    'class' => [
                        'markdown',
                    ],
                ],
            ],



            //


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
            'svg' => [
                'wrap' => [
                    'class' => [
                        'px-6 md:px-10 sm:px-20 xl:px-screen-20',
                        'my-30 xl:my-screen-30',
                    ],
                ],
                'title' => [
                    'class' => [
                        'pb-10 xl:pb-screen-10',
                        'font-sans font-semibold',
                        'text-xl md:text-2xl xl:text-like-2xl',
                        'text-center',
                    ],
                ],
            ],
        ],

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
