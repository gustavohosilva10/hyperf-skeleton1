<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Interfaces\MedicamentsRepositoryInterface;
use App\Request\VaccinesRequest;

class MedicamentsController
{
    private $medicamentsRepository;
    private $response;

    public function __construct(MedicamentsRepositoryInterface $medicamentsRepository, ResponseInterface $response)
    {
        $this->medicamentsRepository = $medicamentsRepository;
        $this->response = $response;
    }

    public function get(int $id)
    {
        return $this->response->json([
            'data' => $this->medicamentsRepository->get($id)
        ]);
    }

    public function register(VaccinesRequest $request)
    {
        $register = $this->medicamentsRepository->register($request);

        if ($register) {
            return $this->response->json([
                'message' => 'Medicamento cadastrado com sucesso.'
            ])->withStatus(201);
        } else {
            return $this->response->json([
                'error' => 'Não foi possível realizar o cadastro.'
            ])->withStatus(500);
        } 
    }
}
