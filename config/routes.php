<?php

declare(strict_types=1);

use Hyperf\HttpServer\Router\Router;
use App\Middleware\AuthMiddleware;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\AuthController@index');

Router::addGroup('/api', function () {
    Router::post('/register', 'App\Controller\AuthController@register');
    Router::post('/login', [\App\Controller\AuthController::class, 'login']);

    Router::get('/categorys/get', [\App\Controller\CategorysController::class, 'get'], ['middleware' => [AuthMiddleware::class]]);
});