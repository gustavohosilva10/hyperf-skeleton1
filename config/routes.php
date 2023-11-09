<?php

declare(strict_types=1);

use Hyperf\HttpServer\Router\Router;
use App\Middleware\AuthMiddleware;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\AuthController@index');

Router::addGroup('/api', function () {
    Router::post('/register', [\App\Controller\AuthController::class, 'register']);
    Router::post('/login', [\App\Controller\AuthController::class, 'login']);

    Router::patch('/user/update', [\App\Controller\UserController::class, 'update'], ['middleware' => [AuthMiddleware::class]]);

    Router::get('/categorys/get', [\App\Controller\CategorysController::class, 'get'], ['middleware' => [AuthMiddleware::class]]);
    Router::get('/bredPet/get/{id}', [\App\Controller\BreedPetController::class, 'get'], ['middleware' => [AuthMiddleware::class]]);

    Router::get('/user/pet/get', [\App\Controller\PetsController::class, 'get'], ['middleware' => [AuthMiddleware::class]]);
    Router::post('/user/pet/register', [\App\Controller\PetsController::class, 'register'], ['middleware' => [AuthMiddleware::class]]);

});