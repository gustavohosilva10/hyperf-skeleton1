<?php

declare(strict_types=1);

namespace App\Factory;

use App\Repository\LoginRepository;
use Psr\Container\ContainerInterface;

class LoginRepositoryFactory
{
    public function __invoke(ContainerInterface $container): LoginRepository
    {
        return new LoginRepository();
    }
}
