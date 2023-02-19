<?php
$app_name   = env('APP_NAME');
$app_title  = env('APP_NAME');
$app_desc   = $app_name . ' - Launch mode';

return [
    'name'  => $app_name,
    'url'   => env('APP_URL'),
    'title' => $app_title,
    'desc'  => $app_desc,

    'content' => [
        'main_headline' => [
            'text' => 'Your main punch-line goes here',
            'highlighted_words' => [
                'punch-line',
            ]
        ],
        'short_description' => 'A short description of what your app or service is about.',
        'features' => [
            '',
            '',
            '',
            ''
        ]
    ],

    'maker' => [
        'url'       =>  'https://smartynetwork.com',
        'twitter'   =>  null,
        'reddit'    =>  [
            'name'  =>  '@smartynetwork',
            'url'   =>  'https://www.reddit.com/user/smartynetwork/'
        ]
    ]
];
