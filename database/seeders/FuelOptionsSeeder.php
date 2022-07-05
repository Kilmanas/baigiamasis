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
        $fuelOptions = ['E85', '92', '95', '98', 'D'];
        foreach ($fuelOptions as $fuelOption) {
            if($fuelOption != 'D') {
                DB::table('fuel_options')->insert([

                    'name' => $fuelOption,
                    'fuel_type_id' => 1
                ]);
            } else {
                DB::table('fuel_options')->insert([

                    'name' => $fuelOption,
                    'fuel_type_id' => 2
                ]);
            }
        }
    }
}
