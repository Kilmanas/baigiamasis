<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fuelTypes = ['Benzinas', 'Benzinas/Dujos', 'Benzinas/Elektra', 'Dyzelinas', 'Dyzelinas/Elektra'];
        foreach ($fuelTypes as $fuelType) {
            DB::table('fuel_types')->insert([

                'name' => $fuelType
            ]);
        }
    }
}
