<?php

namespace App\Repositories;
use Hyperf\Di\Container;
use App\Model\User;
use App\Model\Pet;
use App\Model\History;
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

    public function get()
    {
        return Pet::where('id_user', $this->decodedToken->id)
        ->with('category')
        ->with('breed')
        ->with('user')
        ->get();
    } 

    public function register($request):bool
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

    public function searchPet($uuid)
    {
        $pet = Pet::where('uuid', $uuid)    
        ->with('user')
        ->with('breed')
        ->with('category')
        ->get();
    }

    public function getCoordinatesPet($request)
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => env('RAPIDAPIKEY'),
            'X-RapidAPI-Host' => env('RAPIDAPIHOST')
        ])->get(env('RAPIDAPIURL'), [
            'latlng' => $request->lat.','.$request->long,
            'language' => 'br'
        ]);
        $address = json_decode($response->getBody(), true);
        
        if($address){
            $this->registerHistory($address);
        }
    }

    public function registerHistory($address): void
    {
        $data = new History();
        $data->address = $address['results'][0]['formatted_address'];
        $data->id_pet = $request->id_pet;
        $data->save();
    }
}
