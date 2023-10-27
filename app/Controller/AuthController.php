<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\LoginRequest;
use App\Intefaces\LoginRepositoryInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\RequestInterface;

class AuthController 
{
    /* private LoginRepositoryInterface $loginRepository;

    public function __construct(LoginRepositoryInterface $loginRepository) {
        $this->loginRepository = $loginRepository;
    }

    public function login(LoginRequest $request)
    {
        return $this->loginRepository->login($request);
    }
 */
    public function index()
    {
       

        return [
            'method' =>'get',
            'message' => "Hello .",
        ];
    }
}
