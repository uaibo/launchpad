<?php
$app_name   = env('APP_NAME');
$app_title  = env('APP_NAME');
$app_desc   = $app_name . ' - Launch mode';

return [
    'name'  => $app_name,
    'url'   => env('APP_URL'),
    'title' => $app_title,
    'desc'  => $app_desc,

    'branding_colors' => [
        'primary' => '#FF0000',
    ],

    'main_headline' => [
        'text' => 'Test the waters before you dive in!',
        'highlighted' => [
            'dive in'
        ],
        'bold' => [

        ]
    ],

    'short_description' => [
        'text' => 'Launchpad helps you create a landing page where potential customers can signup for your future product.',
        'highlighted' => [
            'Launchpad',
        ],
        'bold' => [

        ]
    ],

    'benefits' => [
        '🔥 shortest time from idea to launch',
        '🕷️ ready configurations',
        '🤡 great developer experience and documentation',
        '✅ validate your idea faster',
    ],

    'prelaunch_text' => 'We are currently just finishing up the last details before our first release.',

    'leave_your_email_text' => 'Leave your email 👇 to get access once it\'s ready!',

    'email_field_placeholder' => 'Email',

    'submit_button_text' => 'REQUEST ACCESS',

    'made_for_text' => 'Made for creators',

    'made_by_text' => '@smartynetwork',
    'made_by_link' => 'https://www.reddit.com/user/smartynetwork/',

    'thank_you_text' => 'You\'ll hear from us soon! We are finishing up some more features and hope you will use this package to launch all your future projects.',

    'maker' => [
        'url'       =>  'https://smartynetwork.com',
        'twitter'   =>  null,
        'reddit'    =>  [
            'name'  =>  '@smartynetwork',
            'url'   =>  'https://www.reddit.com/user/smartynetwork/'
        ]
    ]
];
