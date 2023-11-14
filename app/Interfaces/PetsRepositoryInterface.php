<?php

namespace App\Interfaces;

interface PetsRepositoryInterface
{
    public function get();
    public function register(array $request);
    public function searchPet(string $uuid);
    public function registerHistory(array $request);
}
