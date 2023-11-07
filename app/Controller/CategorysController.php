<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Interfaces\CategorysRepositoryInterface;

class CategorysController
{
    private $categoryRepository;
    private $response;

    public function __construct(CategorysRepositoryInterface $categoryRepository, ResponseInterface $response)
    {
        $this->categoryRepository = $categoryRepository;
        $this->response = $response;
    }

    public function get()
    {
        return $this->response->json([
            'data' => $this->categoryRepository->get()
        ]);
    }
}
