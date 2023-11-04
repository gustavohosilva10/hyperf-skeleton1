<?php

declare(strict_types=1);

use Hyperf\Database\Seeders\Seeder;
use Hyperf\DbConnection\Db;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;

class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert([
            'id' =>1,
            'uuid'=> Uuid::uuid4()->toString(),
            'name' => 'Mamíferos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categorys')->insert([
            'id' =>2,
            'uuid'=> Uuid::uuid4()->toString(),
            'name' => 'Aves',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categorys')->insert([
            'id' =>3,
            'uuid'=>Uuid::uuid4()->toString(),
            'name' => 'Répteis',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categorys')->insert([
            'id' =>4,
            'uuid'=>Uuid::uuid4()->toString(),
            'name' => 'Peixes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
