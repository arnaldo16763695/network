<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('locations')->insert([
            'name' => "Servidores 1",
            'observation' => "Servidores 1",
            'headquarter_id' => 1,
            
        ]);
        DB::table('locations')->insert([
            'name' => "Servidores 2",
            'observation' => "Servidores 2",
            'headquarter_id' => 1,
            
        ]);
        DB::table('locations')->insert([
            'name' => "Servidores 3",
            'observation' => "Servidores 2",
            'headquarter_id' => 1,
            
        ]);
    }
}
