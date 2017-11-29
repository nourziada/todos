<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => 'b915c779b21bb96af986' ,         // Your GitHub Client ID
        'client_secret' => '6829b089255ef5ccb6ada65da1a7fd6716a52882', // Your GitHub Client Secret
        'redirect' => 'http://todos.dev/auth/github/callback',
    ],

    'facebook' => [
        'client_id' => '1526037564147425',
        'client_secret' => 'e54cacca97229bc2ba62f9084da8b436',
        'redirect' => 'http://todos.dev/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => '8jfjMHNZy4W3s4sNYwfDJdGEQ',         // Your GitHub Client ID
        'client_secret' =>'3KQwUuZAM2COpFLiW3Oqby33fVJU1oskb2JitWPHACMn24wm5c', // Your GitHub Client Secret
        'redirect' => 'http://todos.dev/auth/twitter/callback',
    ],

];
