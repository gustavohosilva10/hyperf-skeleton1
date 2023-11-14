<?php

namespace App\Interfaces;

interface HistoryRepositoryInterface
{
    public function get(int $id);
    public function register(array $request);
}
