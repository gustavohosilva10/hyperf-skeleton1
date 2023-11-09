<?php

namespace App\Interfaces;

interface PetsRepositoryInterface
{
    public function get();
    public function register(array $request);
}
