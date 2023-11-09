<?php

declare(strict_types=1);
use App\Interfaces\LoginRepositoryInterface;
use App\Repositories\LoginRepository; 
use App\Interfaces\CategorysRepositoryInterface;
use App\Repositories\CategorysRepository; 
use App\Repositories\BreedPetRepository; 
use App\Interfaces\BreedPetRepositoryInterface;

use App\Repositories\PetsRepository; 
use App\Interfaces\PetsRepositoryInterface;

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    LoginRepositoryInterface::class => LoginRepository::class, 
    CategorysRepositoryInterface::class => CategorysRepository::class,
    BreedPetRepositoryInterface::class => BreedPetRepository::class,
    PetsRepositoryInterface::class => PetsRepository::class,
];