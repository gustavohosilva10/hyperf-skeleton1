<?php

namespace App\Repositories;
use Ramsey\Uuid\Uuid;
use App\Interfaces\VaccinesRepositoryInterface;
use App\Model\Vaccines;

class VaccinesRepository implements VaccinesRepositoryInterface
{
   public function get($id)
   {
      return Vaccines::where('id_pet', $id)->with('pet')->get();
   }

   public function register($request):bool
   {
      $vaccine = Vaccines::create([
         'uuid' => Uuid::uuid4()->toString(),
         'name' => $request->input('name'), 
         'date' => $request->input('date'), 
         'number_dose' => $request->input('number_dose'), 
         'ml' => $request->input('ml'), 
         'repeat' => $request->input('repeat'), 
         'date_repeat' => $request->input('date_repeat'), 
         'id_pet' => $request->input('id_pet'), 
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now(),
     ]);

     if($vaccine){
         return true;
     }

     return false;
   }
}
