<?php

return [
    'attributes' => [

        // Here we'll define the default attributes for our components. All components will
        // fall back to this attributes if there is nothing defined for a specific template.
        'default' => [

            'hero' => [
                'image' => [
                    'header' => [
                        'class' => [
                            'px-3 mx-auto mt-40 mb-20',
                            'sm:px-10',
                            'md:px-5 md:my-70',
                            'lg:w-10/12',
                            'xl:px-screen-10 xl:my-screen-70',
                        ],
                    ],
                    'title' => [
                        'class' => [
                            'px-3 font-bold font-hero leading-snug tracking-tight text-4xl',
                            'sm:px-10 sm:text-5xl',
                            'md:px-5 md:text-6xl',
                            'xl:px-screen-10 xl:text-like-6xl',
                        ],
                    ],
                    'subtitle' => [
                        'class' => [
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'block font-sans font-light',
                            'text-sm xl:text-like-sm',
                        ],
                    ],
                    'body' => [
                        'class' => [
                            'block',
                            'w-full',
                            'pointer-events-none',
                        ],
                    ],
                    'item' => [
                        'class' => ['w-full'],
                    ],
                ],
                'lottie' => [
                    'wrap' => [
                        'class' => [
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'mt-40 mb-20 xl:my-screen-40',
                            'mx-auto',
                            'md:flex md:items-center md:justify-between',
                            'lg:w-10/12',
                        ],
                    ],
                    'header' => [
                        'class' => [
                            'px-3 mb-20',
                            'sm:px-10',
                            'md:mb-0',
                            'lg:w-6/10',
                            'xl:px-screen-10',
                        ],
                    ],
                    'title' => [
                        'class' => [
                            'px-3 font-bold font-hero leading-snug tracking-tight text-4xl',
                            'sm:px-10 sm:text-5xl',
                            'md:px-5 md:text-6xl',
                            'xl:px-screen-10 xl:text-like-6xl',
                        ],
                    ],
                    'subtitle' => [
                        'class' => [
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'block font-sans font-light',
                            'text-sm xl:text-like-sm',
                        ],
                    ],
                    'body' => [
                        'class' => [
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'lg:w-4/10',
                        ],
                    ],
                ],
                'text' => [
                    'header' => [
                        'class' => [
                            'px-3 mx-auto mt-40 mb-20',
                            'sm:px-10',
                            'md:px-5 md:my-70',
                            'lg:w-10/12',
                            'xl:px-screen-10 xl:my-screen-70',
                        ],
                    ],
                    'title' => [
                        'class' => [
                            'px-3 font-bold font-hero leading-snug tracking-tight text-4xl',
                            'sm:px-10 sm:text-5xl',
                            'md:px-5 md:text-6xl',
                            'lg:w-6/10',
                            'xl:px-screen-10 xl:text-like-6xl',
                        ],
                    ],
                    'subtitle' => [
                        'class' => [
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'block font-sans font-light',
                            'text-sm xl:text-like-sm',
                        ],
                    ],
                ],
            ],

            'intro' => [
                'wrap' => [
                    'class' => [
                        'flex justify-end items-center mx-auto px-3 my-10',
                        'sm:px-10',
                        'md:px-5',
                        'lg:w-10/12 lg:my-30',
                        'xl:px-screen-10 xl:my-screen-30',
                    ],
                ],
            ],

            'excerpt' => [
                'wrap' => [
                    'class' => [
                        'w-full lg:w-7/10 my-10 space-y-10',
                        'lg:my-30',
                        'xl:my-screen-30 xl:space-y-screen-10',
                    ],
                ],

                'url' => [
                    'wrap' => [
                        'class' => [
                            'px-3',
                            'sm:px-10',
                            'md:px-5',
                            'xl:px-screen-10'
                        ],
                    ],
                    'link' => [
                        'class' => [
                            'w-15 h-15 p-4 flex items-center justify-center rounded-full bg-black text-white'
                        ],
                        'target' => '_blank',
                        'rel' => 'noopener',
                    ]
                ],

                'markdown' => [
                    'wrap' => [
                        'class' => [
                            'px-3',
                            'sm:px-10',
                            'md:px-5',
                            'xl:px-screen-10'
                        ],
                    ],
                    'title' => [
                        'class' => [
                            'text-xl font-sans font-semibold',
                            'md:text-2xl',
                            'xl:text-like-2xl',
                        ],
                    ],
                    'body' => [
                        'class' => [
                            'markdown font-sans font-semibold',
                        ],
                    ],
                ],
            ],

            'aside' => [
                'wrap' => [
                    'class' => [
                        'hidden',
                        'lg:block lg:w-3/10'
                    ],
                ],

                'definition' => [
                    'wrap' => [
                        'class' => [
                            'px-3 my-30',
                            'sm:px-10',
                            'md:px-5',
                            'xl:px-screen-10 xl:my-screen-30',
                        ],
                    ],
                    'body' => [
                        'class' => [
                            'font-sans text-sm leading-loose',
                            'xl:text-like-sm',
                        ],
                    ],
                    'term' => [
                        'class' => [
                            'font-semibold'
                        ],
                    ],
                    'item' => [
                        'class' => [
                            'mb-6',
                            'xl:mb-screen-6',
                        ],
                    ]
                ],
            ],

            'relations' => [
                'contact' => [
                    'wrap' => [
                        'class' => [
                            'px-3 md:px-5 mb-10 mt-50',
                            'lg:w-10/12 lg:mx-auto lg:px-10 lg:flex lg:flex-row-reverse items-start',
                            'xl:px-screen-10 xl:mt-screen-50'
                        ],
                    ],
                    'body' => [
                        'class' => [
                            'px-3 md:px-5 mb-10',
                            'lg:px-10 lg:w-7/10',
                            'xl:px-screen-10 xl:mb-screen-10',
                            // 'font-sans font-semibold leading-snug text-xl',
                            // 'xl:text-like-3xl',
                        ],
                    ],
                    'recipient' => [
                        'class' => [
                            'hidden px-3 md:px-5 space-x-5',
                            'lg:flex lg:items-center',
                            'lg:px-10 lg:w-3/10',
                            'xl:px-screen-10 xl:space-x-screen-5'
                        ],
                    ],
                    'avatar' => [
                        'class' => [
                            'rounded-full overflow-hidden w-15',
                            'xl:w-screen-15'
                        ],
                    ],
                    'recipient_name' => [
                        'class' => [
                            'block font-semibold font-sans text-lg',
                        ],
                    ],
                    'recipient_title' => [
                        'class' => [
                            'block text-sm font-sans',
                            'lg:text-like-sm',
                        ],
                    ]
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
                    'body' => [
                        'class' => [
                            'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                            'md:w-7/10',
                        ],
                    ],
                ],
                'case' => [
                    'wrap' => [
                        'class' => [
                            'block font-sans mb-10',
                            'xl:mb-screen-10'
                        ],
                    ],
                    'image' => [
                        'class' => [
                            'w-full block mb-5',
                            'xl:mb-screen-5'
                        ],
                    ],
                    'title' => [
                        'class' => [
                            'block text-xl font-semibold leading-snug',
                            'lg:text-3xl',
                            'xl:text-like-3xl'
                        ],
                    ],
                    'subtitle' => [
                        'class' => [
                            'block text-sm',
                            'xl:text-like-sm'
                        ],
                    ],
                ]
            ],

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
                        'flex items-center justify-center bg-gray w-full h-full p-6',
                        'md:p-10',
                        'lg:py-20',
                        'xl:px-screen-10 xl:py-screen-20',
                    ],
                ],
                'image' => [
                    'class' => [
                        'w-full max-w-50 max-h-25',
                    ],
                ],
            ],

            // default.definition
            'definition' => [
                'wrap' => [
                    'class' => [
                        'px-3 pt-20 pb-10 bg-black text-white mb-30',
                        'sm:px-10',
                        'md:px-5',
                        'lg:pt-50 lg:pb-30',
                        'xl:px-screen-10 xl:pt-screen-50 xl:pb-screen-30 xl:mb-screen-30'
                    ],
                ],
                'title' => [
                    'class' => [
                        'mb-10 px-3 font-sans font-semibold text-xl ml-auto',
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
                        'px-3 mb-5 font-sans font-semibold',
                        'sm:px-10 ',
                        'md:px-5 md:w-3/10 md:text-xl md:my-15',
                        'xl:px-screen-10 xl:mb-screen-15 xl:text-like-xl',
                    ],
                ],
                'item' => [
                    'class' => [
                        'px-3 mb-15',
                        'sm:px-10 ',
                        'md:px-5 md:w-7/10 md:mt-15',
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
                        'overflow-hidden my-20',
                        'md:my-30',
                        'lg:my-50',
                        'xl:my-screen-50',
                    ],
                ],
                'body' => [
                    'class' => [
                        'pb-10 -mb-10 flex items-center overflow-x-auto space-x-10',
                        'lg:space-x-30',
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
                        'my-20',
                        'lg:my-50',
                        'xl:my-screen-50',
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
                        'md:text-center',
                    ]
                ],
                'items' => [

                    // default.group.items.phone
                    'phone' => [
                        'canvas' => [
                            'class' => [
                                'w-full p-6 py-10 md:p-10 lg:p-20 xl:p-screen-20',
                            ]
                        ],
                        'item' => [
                            'class' => [
                                'w-full',
                            ]
                        ]
                    ],

                    'image' => [
                        'item' => [
                            'class' => [
                                'w-full',
                            ]
                        ]
                    ],

                    // default.group.items.screen
                    'screen' => [
                        'canvas' => [
                            'class' => [
                                'p-6 md:p-10 lg:p-20 xl:p-screen-20',
                            ]
                        ]
                    ],
                ]
            ],

            // default.image
            'image' => [
                'wrap' => [
                    'class' => [
                        'mx-auto my-20 px-3',
                        'sm:px-10',
                        'md:px-5 md:my-30',
                        'lg:w-10/12 lg:my-50',
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
                        'px-10 mt-2 font-sans text-sm',
                        'md:text-center',
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
                        'item' => [
                            'class' => [
                                'mx-auto'
                            ],
                        ],
                        'wrap' => [
                            'class' => [
                                'w-full flex-shrink-0',
                                'lg:w-10/12'
                            ]
                        ],
                        'canvas' => [
                            'class' => [
                                'p-6 md:p-10 lg:p-20 xl:p-screen-20',
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
                    'class' => [
                        'py-6 border-dotted border-t-2 border-black',
                        'lg:py-10',
                        'xl:py-screen-10',
                    ]
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
                        'px-3 my-20',
                        'sm:px-10',
                        'md:px-5 md:flex md:items-start md:justify-end',
                        'lg:w-10/12 lg:mx-auto lg:my-30',
                        'xl:px-screen-10 xl:my-screen-30',
                    ],
                ],
                'title' => [
                    'class' => [
                        'px-3 pb-5 text-xl font-sans font-semibold',
                        'sm:px-10',
                        'md:px-5 md:pb-10 md:w-3/10 md:text-2xl',
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

            // default.portfolio
            'portfolio' => [
                'wrap' => [
                    'class' => [
                        'px-6 mb-20 flex flex-col justify-center min-h-screen overflow-hidden bg-black text-white',
                        'sm:px-20',
                        'md:px-10',
                        'lg:mb-40',
                        'xl:px-screen-20',
                    ],
                ],
                'title' => [
                    'class' => [
                        'mb-20 font-sans font-semibold text-xl text-center',
                        'md:text-3xl',
                        'xl:text-screen-3xl',
                    ],
                ],
                'stage' => [
                    'class' => [
                        'flex space-x-6',
                        'md:space-x-10',
                        'xl:space-x-screen-10',
                    ],
                ],
                'item' => [
                    'class' => [
                        'p-10 flex-shrink-0 flex flex-col justify-between w-9/10 bg-white text-black',
                        'md:w-4/10',
                        'lg:w-3/10',
                    ],
                ],
                'items' => [
                    'markdown' => [
                        'title' => [
                            'class' => [
                                'font-sans font-semibold text-xl mb-5',
                                'md:text-2xl',
                                'lg:mb-10',
                                'xl:text-screen-2xl',
                            ]
                        ],
                        'body' => [
                            'class' => [
                                'markdown'
                            ],
                        ],
                        'addon' => [
                                'wrap' => [
                                    'class' => [
                                        'mt-5 w-8/12',
                                        'lg:mt-20'
                                    ]
                                ]
                        ]
                    ],
                ],
            ],

            // default.process
            'process' => [
                'wrap' => [
                    'class' => [
                        'py-10',
                        'bg-black text-white',
                        'lg:my-20 lg:py-20',
                    ]
                ],
                'items' => [

                    // default.process.items.lottie
                    'lottie' => [
                        'wrap' => [
                            'class' => [
                                'px-3 my-10 overflow-x-auto',
                                'sm:px-10',
                                'md:px-5',
                                'lg:my-50',
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
                            'style' => [
                                'min-width: 1024px'
                            ]
                        ],
                    ],

                    // default.process.items.markdown
                    'markdown' => [
                        'wrap' => [
                            'class' => [
                                'px-3 my-20',
                                'sm:px-10',
                                'md:px-5 md:flex md:items-start md:justify-end',
                                'lg:w-10/12 lg:mx-auto lg:my-30',
                                'xl:px-screen-10 xl:my-screen-30',
                            ],
                        ],
                        'title' => [
                            'class' => [
                                'px-3 pb-5 text-xl font-sans font-semibold',
                                'sm:px-10',
                                'md:px-5 md:w-3/10 md:text-2xl md:pb-10',
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

            // default.screen
            'screen' => [
                'wrap' => [
                    'class' => [
                        'my-20 px-6 md:px-10',
                        'lg:px-20 lg:my-50 xl:my-screen-50 xl:px-screen-20',
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
                    'class' => [
                        'px-10 mt-5 font-sans text-center font-semibold text-sm xl:text-like-sm'
                        'px-10 mt-5 font-sans font-semibold text-sm xl:text-like-sm',
                        'md:text-center',
                    ],
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
                        'block h-full border-dotted border-t-2 border-b-2 border-gray-mid py-6',
                        'lg:py-10',
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

            // default.video
            'video' => [
                'wrap' => [
                    'class' => [
                        'block',
                        'my-50 xl:my-screen-50',
                        'px-3 md:px-5 sm:px-10 xl:px-screen-10',
                        'mx-auto lg:w-10/12',
                    ],
                ],
                'player' => [
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
                'caption' => [
                    'class' => [
                        'block mt-5 text-sm font-sans',
                        'md:text-center',
                    ],
                ],
            ],
        ],

        // Next we will define the attributes for our components if they'll render within the
        // navigation context. Attributes that are'nt defined inherit the default attributes.
        'navigation' => [
            'case' => [
                'wrap' => [
                    'class' => [
                        'block font-sans',
                    ],
                ],
                'image' => [
                    'class' => [
                        'w-full block mb-4',
                        'xl:mb-screen-4'
                    ],
                ],
                'title' => [
                    'class' => [
                        'block text-2xl font-semibold leading-snug',
                        'xl:text-like-2xl'
                    ],
                ],
                'subtitle' => [
                    'class' => [
                        'block text-xs',
                        'xl:text-like-xs'
                    ],
                ],
            ],
            'markdown' => [
                'wrap' => [],
                'title' => [
                    'class' => [
                        'text-xl font-sans font-semibold mb-10',
                        'md:text-2xl',
                        'xl:text-like-2xl',
                    ]
                ],
                'body' => [
                    'class' => ['markdown']
                ],
            ],
            'image' => [
                'wrap' => [],
                'figure' => [],
            ]
        ],

        // Within explicit defined templates some components require spacial attributes. Here
        // we'll define overrides based on the current context. If an attribute doesn't exist
        // it will fall back to the default attributes.
        'home' => [

            // home.feed
            'feed' => [
                'items' => [
                    'case' => [
                        'wrap' => [
                            'class' => [
                                'block font-sans mb-10',
                                'xl:mb-screen-10'
                            ],
                        ],
                        'image' => [
                            'class' => [
                                'w-full block mb-5',
                                'xl:mb-screen-5'
                            ],
                        ],
                        'title' => [
                            'class' => [
                                'block font-semibold leading-snug text-xl',
                                'lg:text-3xl',
                                'xl:text-like-3xl'
                            ],
                        ],
                        'subtitle' => [
                            'class' => [
                                'block text-sm',
                                'xl:text-like-sm'
                            ],
                        ],
                    ]
                ]
            ],

            // home.quote
            'quote' => [
                'wrap' => [
                    'class' => [
                        'px-3 mx-auto',
                        'sm:px-10',
                        'md:px-5',
                        'lg:w-10/12',
                        'xl:px-screen-10',
                    ],
                ],
                'body' => [
                    'class' => [
                        'px-3 w-full',
                        'sm:px-10',
                        'md:px-5',
                        'xl:px-screen-10',
                    ]
                ],
                'cite' => [
                    'class' => [
                        'font-sans font-semibold leading-tight mb-2',
                        'text-xl md:text-3xl xl:text-like-3xl',
                    ],
                ],
                'author' => [
                    'class' => [
                        'author',
                        'block',
                        'font-sans font-normal',
                        'text-base md:text-xl',
                    ],
                ],
            ],

            // home.services
            'services' => [
                'wrap' => [
                    'class' => [
                        'px-6 md:px-10 xl:px-screen-10',
                        'mx-auto',
                        'my-50 xl:my-screen-50',
                        'lg:w-10/12',
                    ],
                ],
                'items' => [
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
                        'px-6 mx-auto my-20',
                        'sm:px-20',
                        'md:px-10',
                        'lg:w-8/12 lg:my-50',
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

            // case.svg
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
                'caption' => [
                    'class' => [
                        'font-sans text-sm xl:text-like-sm mt-5',
                        'md:text-center',
                    ]
                ]
            ],
        ],

        'legal' => [
            // legal.markdown
            'markdown' => [
                'wrap' => [
                    'class' => [
                        'px-3 my-30',
                        'sm:px-10',
                        'md:px-5',
                        'lg:w-8/12 lg:mx-auto',
                        'xl:px-screen-10 xl:my-screen-30',
                    ],
                ],
                'body' => [
                    'class' => [
                        'px-3 markdown',
                        'sm:px-10',
                        'md:px-5',
                        'xl:px-screen-10',
                    ],
                ],
            ],
        ]
    ],
];
