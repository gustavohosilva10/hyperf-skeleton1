<?php

declare(strict_types=1);

use Hyperf\Database\Seeders\Seeder;
use Hyperf\DbConnection\Db;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;

class BreedPetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breed_pets')->updateOrInsert([
            'id' => 1,
            'name' => 'Cão',
            'id_category' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 2,
            'name' => 'Gato',
            'id_category' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 3,
            'name' => 'Furãos',
            'id_category' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 4,
            'name' => 'Coelho',
            'id_category' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 5,
            'name' => 'Hamster',
            'id_category' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 6,
            'name' => 'Porquinho-da-india',
            'id_category' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 7,
            'name' => 'Chinchila',
            'id_category' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
 


        DB::table('breed_pets')->updateOrInsert([
            'id' => 8,
            'name' => 'Calopsita',
            'id_category' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 9,
            'name' => 'Cacatuas',
            'id_category' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 10, 
            'name' => 'Papagaios',
            'id_category' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 11,
            'name' => 'Trinca-Ferro',
            'id_category' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('breed_pets')->updateOrInsert([
            'id' => 12,
            'name' => 'Cágados',
            'id_category' =>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 13,
            'name' => 'Tartarugas',
            'id_category' =>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 14,
            'name' => 'Lagartos',
            'id_category' =>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 15,
            'name' => 'Cobras',
            'id_category' =>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('breed_pets')->updateOrInsert([
            'id' => 16,
            'name' => 'Carpa',
            'id_category' =>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 17,
            'name' => 'Peixe-palhaço',
            'id_category' =>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 18,
            'name' => 'Cascudos',
            'id_category' =>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 19,
            'name' => 'Coridoras',
            'id_category' =>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('breed_pets')->updateOrInsert([
            'id' => 20,
            'name' => 'Barbos',
            'id_category' =>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
