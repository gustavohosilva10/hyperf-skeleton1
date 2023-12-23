<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function update(array $request);
    public function getUser();
}
