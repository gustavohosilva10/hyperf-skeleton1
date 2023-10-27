<?php

return [
    'default' => 'jwt',
    'connections' => [
        'jwt' => [
            'driver' => \HyperfExt\Jwt\JwtFactory::class,
            'secret' => env('JWT_SECRET', 'your-secret-key'), 
            'ttl' => env('JWT_TTL', 60), 
            'refresh_ttl' => env('JWT_REFRESH_TTL', 20160), 
            'providers' => [
                'user' => [
                    'driver' => \HyperfExt\Jwt\Provider\UserProvider::class,
                    'model' => \App\Model\User::class, 
                ],
            ],
        ],
    ],
];
