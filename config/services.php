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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '20065125381-egffvmti2mde37r7m1v6d48u3p45a58c.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://doogdoogibd.com/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '417009936761845',
        'client_secret' => '6de4cd5cc510ae981df98bba7f724bf7',
        'redirect' => 'https://doogdoogibd.com/auth/facebook/callback',
    ],

];
