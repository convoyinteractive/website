<?php

return [
    'key' => env('MAILCHIMP_KEY'),

    'from' => [
        'name' => env('MAILCHIMP_FROM_NAME'),
        'mail' => env('MAILCHIMP_FROM_MAIL'),
    ],

    'lists' => [
        'default' => env('MAILCHIMP_DEFAULT_LIST'),
    ],
];
