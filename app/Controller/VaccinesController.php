<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Interfaces\VaccinesRepositoryInterface;
use App\Request\VaccinesRequest;

class VaccinesController
{
    private $vaccinesRepository;
    private $response;

    public function __construct(VaccinesRepositoryInterface $vaccinesRepository, ResponseInterface $response)
    {
        $this->vaccinesRepository = $vaccinesRepository;
        $this->response = $response;
    }

    public function get(int $id)
    {
        return $this->response->json([
            'data' => $this->vaccinesRepository->get($id)
        ]);
    }
}
