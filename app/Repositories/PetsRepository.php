<?php

namespace App\Repositories;
use Hyperf\Di\Container;
use App\Model\User;
use App\Model\Pet;
use App\Interfaces\PetsRepositoryInterface;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;

class PetsRepository implements PetsRepositoryInterface
{
    protected $container;
    protected $decodedToken;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->decodedToken = $container->get('user');
    }

    public function get():array
    {
        return Pet::where('id_user', $this->decodedToken->id)
        ->with('category')
        ->with('breed')
        ->with('user')
        ->get();
    } 

    public function register($request)
    {
        $pet = Pet::create([
            'uuid' => Uuid::uuid4()->toString(),
            'name' => $request->input('name'), 
            'birth_date' => $request->input('birth_date'), 
            'size' => $request->input('size'), 
            'sex' => $request->input('sex'), 
            'id_breed' => $request->input('id_breed'), 
            'id_category' => $request->input('id_category'), 
            'id_user' => $this->decodedToken->id, 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        if($pet){
            return true;
        }
        return false;
    }
}
