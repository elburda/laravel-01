<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('demandas')->insert([
            [
                'demanda_id'=> 1,
                'name' => 'Alta',
                'abbreviation' => 'AD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'demanda_id'=> 2,
                'name' => 'Media',
                'abbreviation' => 'MD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'demanda_id'=> 3,
                'name' => 'Baja',
                'abbreviation' => 'BD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
