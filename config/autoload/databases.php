<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use function Hyperf\Support\env;

return [
    'default' => [
        'driver' => env('DB_CONNECTION', 'mysql'), // Alterado para corresponder à variável de ambiente DB_CONNECTION
        'host' => env('DB_HOST', 'hyperf-skeleton-mariadb'), // Alterado para corresponder à variável de ambiente DB_HOST
        'database' => env('DB_DATABASE', 'petcare'),
        'port' => env('DB_PORT', 3306),
        'username' => env('DB_USERNAME', 'root'),
        'password' => env('DB_PASSWORD', 'secret'), // Alterado para corresponder à variável de ambiente DB_PASSWORD
        'charset' => env('DB_CHARSET', 'utf8mb4'), // Alterado para corresponder à variável de ambiente DB_CHARSET
        'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'), // Alterado para corresponder à variável de ambiente DB_COLLATION
        'prefix' => env('DB_PREFIX', ''),
        'pool' => [
            'min_connections' => 1,
            'max_connections' => 10,
            'connect_timeout' => 10.0,
            'wait_timeout' => 3.0,
            'heartbeat' => -1,
            'max_idle_time' => (float) env('DB_MAX_IDLE_TIME', 60),
        ],
        'commands' => [
            'gen:model' => [
                'path' => 'app/Model',
                'force_casts' => true,
                'inheritance' => 'Model',
            ],
        ],
    ],
];
