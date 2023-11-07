<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Interfaces\BreedPetRepositoryInterface;

class BreedPetController
{
    private $breedPetRepository;
    private $response;

    public function __construct(BreedPetRepositoryInterface $breedPetRepository, ResponseInterface $response)
    {
        $this->breedPetRepository = $breedPetRepository;
        $this->response = $response;
    }

    public function get($id)
    {
        return $this->response->json([
            'data' => $this->breedPetRepository->get($id)
        ]);
    }
}
