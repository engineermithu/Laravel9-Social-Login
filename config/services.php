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

    'github' => [
        'client_id' => 'a32eed0ce38c606f645f',
        'client_secret' => '06ae2bca22e69ff642180ce7470903a6c14b54a1',
        'redirect' => 'http://localhost:8000/login-github-callback',
    ],

    'google' => [
        'client_id' => '850648167358-28i3oeimloo0l858te1o42mi78lpocer.apps.googleusercontent.com',
        'client_secret' => '05f291cb7fc576d7d9aa2d1761462319b79523b2',
        'redirect' => 'http://localhost:8000/login-google-callback',
    ],


];
