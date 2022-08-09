<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'twitter' => [
        //'client_id' => 'KU7S6Dc0CEGh17EZO201HpGDi',
        'client_id' => 'VUhzazJnMFRiS1I3U3RIcWNxUkE6MTpjaQ',
        //'client_secret' => 'rUqUEHXuueoSoIeS40TW8U5Xun3VtjztuPb6pLK1ovoGQyDBUJ',
        'client_secret' => 'mPjOvK-f31y35vfJFF-uVZkxExuno93d8Rbd5VbfUpN9swfAWc',
        'redirect' => '',
    ]
];
