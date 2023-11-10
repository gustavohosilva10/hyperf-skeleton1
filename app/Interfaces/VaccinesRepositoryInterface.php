<?php

namespace App\Interfaces;

interface VaccinesRepositoryInterface
{
    public function get(int $id);
    public function register(array $request);
}
