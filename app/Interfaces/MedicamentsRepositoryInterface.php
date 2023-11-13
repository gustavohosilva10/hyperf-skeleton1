<?php

namespace App\Interfaces;

interface MedicamentsRepositoryInterface
{
    public function get(int $id);
    public function register(array $request);
}
