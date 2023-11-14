<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Interfaces\PetsRepositoryInterface;
use App\Request\PetsRegisterRequest;

class PetsController
{
    private $petsRepository;
    private $response;

    public function __construct(PetsRepositoryInterface $petsRepository, ResponseInterface $response)
    {
        $this->petsRepository = $petsRepository;
        $this->response = $response;
    }

    public function get()
    {
        return $this->response->json([
            'data' => $this->petsRepository->get()
        ]);
    }

    public function register(PetsRegisterRequest $request)
    {
        $register = $this->petsRepository->register($request);

        if ($register) {
            return $this->response->json([
                'message' => 'Pet cadastrado com sucesso.'
            ])->withStatus(201);
        } else {
            return $this->response->json([
                'error' => 'Não foi possível realizar o cadastro.'
            ])->withStatus(500);
        } 
    }

    public function searchPet(string $uuid)
    {
        return $this->response->json([
            'data' => $this->petsRepository->searchPet($uuid)
        ]);
    }

    public function registerHistory(Request $request): void
    {
        $register = $this->petsRepository->registerHistory($request);
    }
}
