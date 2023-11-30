<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\UserRegisterRequest;
use App\Request\LoginRequest;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Interfaces\LoginRepositoryInterface;
use Hyperf\Validation\ValidationException; 

/**
 * @Controller
 */
class AuthController
{
    private $loginRepository;
    private $response;

    public function __construct(LoginRepositoryInterface $loginRepository, ResponseInterface $response)
    {
        $this->loginRepository = $loginRepository;
        $this->response = $response;
    }

    public function login(LoginRequest $request)
    {
        return $auth = $this->loginRepository->login($request);
    }

    /**
     * @RequestMapping(path="register", methods="post")
     */
    public function register(UserRegisterRequest $request)
    {
      
        $result = $this->loginRepository->register($request);

        if($result) {
            return $this->response->json([
                'message' => 'Usuário cadastrado com sucesso.'
            ])->withStatus(201);
        } else {
            return $this->response->json([
                'error' => 'Não foi possível realizar o cadastro.'
            ])->withStatus(500);
        }
    
    }
}
