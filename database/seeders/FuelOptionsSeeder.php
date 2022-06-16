<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fuelOptions = ['E86', '92', '95', '98', 'D'];
        foreach ($fuelOptions as $fuelOption) {
            DB::table('fuel_options')->insert([

                'name' => $fuelOption
            ]);
        }
    }
}
