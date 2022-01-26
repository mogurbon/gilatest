<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'model' => 'iron sportster 883',
            'wheels' => 2,
            'power' => '883 cc'
        ]);
        DB::table('vehicles')->insert([
            'model' => 'honda civic',
            'wheels' => 4,
            'power' => '176 hp'
        ]);
    }
}
