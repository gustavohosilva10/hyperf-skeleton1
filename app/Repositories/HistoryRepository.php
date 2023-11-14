<?php

namespace App\Repositories;
use Ramsey\Uuid\Uuid;
use App\Interfaces\HistoryRepositoryInterface;
use App\Model\History;

class HistoryRepository implements HistoryRepositoryInterface
{
   public function get($id)
   {
      return History::where('id_pet', $id)->with('pet')->get();
   }

   public function register($request):bool
   {
        $history = History::create([
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

        if($history){
            return true;
        }

        return false;
   }
}
