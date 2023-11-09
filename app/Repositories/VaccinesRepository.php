<?php

namespace App\Repositories;
use Ramsey\Uuid\Uuid;
use App\Interfaces\VaccinesRepositoryInterface;
use App\Model\Vaccines;

class VaccinesRepository implements VaccinesRepositoryInterface
{
   public function get($id):array
   {
      return Vaccines::where('id_pet', $id)->with('pet')->get();
   }
}
