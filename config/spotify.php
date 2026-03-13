<?php

return [
    'api_base_url' => env('SPOTIFY_API_BASE_URL', 'https://api.spotify.com/v1'),

    'redirect_route_after_login' => '/user/profile',

    'client_id' => env('SPOTIFY_CLIENT_ID'),
    'client_secret' => env('SPOTIFY_CLIENT_SECRET'),
    'redirect' => env('SPOTIFY_REDIRECT_URI'),
    'scopes' => [
        'user-read-private',
        'user-read-email',
        'user-top-read',
        'playlist-modify-public',
        'playlist-modify-private',
        'playlist-read-private',
        'playlist-read-collaborative'
    ],
];
