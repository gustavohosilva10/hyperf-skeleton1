<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Interfaces\HistoryRepositoryInterface;
use App\Request\MedicamentsRequest;

class HistoryController
{
    private $historyRepository;
    private $response;

    public function __construct(HistoryRepositoryInterface $historyRepository, ResponseInterface $response)
    {
        $this->historyRepository = $historyRepository;
        $this->response = $response;
    }

    public function get(int $id)
    {
        return $this->response->json([
            'data' => $this->historyRepository->get($id)
        ]);
    }

    public function register(MedicamentsRequest $request)
    {
        return $this->response->json([
            'data' => $this->historyRepository->register($id)
        ]);
    }
}
