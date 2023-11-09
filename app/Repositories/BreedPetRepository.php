<?php

namespace App\Repositories;
use App\Model\BreedPets;
use App\Interfaces\BreedPetRepositoryInterface;

class BreedPetRepository implements BreedPetRepositoryInterface
{
    public function get($id):array
    {
        return BreedPets::where('id_category', $id)->with('category')->get();
    }
}
