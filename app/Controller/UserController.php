<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Request\UserUpdateRequest;

class UserController
{
    private $userRepository;
    private $response;

    public function __construct(UserRepositoryInterface $userRepository, ResponseInterface $response)
    {
        $this->userRepository = $userRepository;
        $this->response = $response;
    }

    public function update(UserUpdateRequest $request)
    {
        $user = $this->userRepository->update($request);

        if ($user) {
            return $this->response->json([
                'message' => 'Usuario atualizado com sucesso.'
            ])->withStatus(201);
        } else {
            return $this->response->json([
                'error' => 'Não foi possível atualizar o cadastro.'
            ])->withStatus(500);
        } 
    }
}
