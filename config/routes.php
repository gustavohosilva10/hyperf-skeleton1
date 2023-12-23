<?php

declare(strict_types=1);

use Hyperf\HttpServer\Router\Router;
use App\Middleware\AuthMiddleware;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::addGroup('/api', function () {
    Router::get('/user/pet/searchPet/{uuid}', [\App\Controller\PetsController::class, 'searchPet']);
    Router::post('/user/pet/registerHistory', [\App\Controller\PetsController::class, 'registerHistory']);
});

Router::addGroup('/api', function () {
    Router::post('/register', [\App\Controller\AuthController::class, 'register']);
    Router::post('/login', [\App\Controller\AuthController::class, 'login']);

    Router::patch('/user/update', [\App\Controller\UserController::class, 'update'], ['middleware' => [AuthMiddleware::class]]);
    Router::get('/user/get', [\App\Controller\UserController::class, 'get'], ['middleware' => [AuthMiddleware::class]]);

    Router::get('/categorys/get', [\App\Controller\CategorysController::class, 'get'], ['middleware' => [AuthMiddleware::class]]);
    Router::get('/bredPet/get/{id}', [\App\Controller\BreedPetController::class, 'get'], ['middleware' => [AuthMiddleware::class]]);

    Router::get('/user/pet/get', [\App\Controller\PetsController::class, 'get'], ['middleware' => [AuthMiddleware::class]]);
    Router::post('/user/pet/register', [\App\Controller\PetsController::class, 'register'], ['middleware' => [AuthMiddleware::class]]);

    Router::get('/vaccines/get/{id}', [\App\Controller\VaccinesController::class, 'get'], ['middleware' => [AuthMiddleware::class]]);
    Router::post('/vaccines/pet/register', [\App\Controller\VaccinesController::class, 'register'], ['middleware' => [AuthMiddleware::class]]);

    Router::get('/medicaments/get/{id}', [\App\Controller\MedicamentsController::class, 'get'], ['middleware' => [AuthMiddleware::class]]);
    Router::post('/medicaments/pet/register', [\App\Controller\MedicamentsController::class, 'register'], ['middleware' => [AuthMiddleware::class]]);

    Router::get('/history/get/{id}', [\App\Controller\HistoryController::class, 'get']);
    Router::post('/history/pet/register', [\App\Controller\HistoryController::class, 'register']);
});