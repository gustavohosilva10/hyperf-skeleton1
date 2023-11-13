<?php

namespace App\Repositories;
use Ramsey\Uuid\Uuid;
use App\Interfaces\MedicamentsRepositoryInterface;
use App\Model\Medicaments;

class MedicamentsRepository implements MedicamentsRepositoryInterface
{
   public function get($id)
   {
      return Medicaments::where('id_pet', $id)->with('pet')->get();
   }

   public function register($request):bool
   {
        $medicament = Medicaments::create([
         'uuid' => Uuid::uuid4()->toString(),
         'name' => $request->input('name'), 
         'date' => $request->input('date'), 
         'ml' => $request->input('ml'), 
         'repeat' => $request->input('repeat'), 
         'date_repeat' => $request->input('date_repeat'), 
         'id_pet' => $request->input('id_pet'), 
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now(),
        ]);

        if($medicament){
            return true;
        }

        return false;
    }
}
