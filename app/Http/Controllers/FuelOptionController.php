<?php

namespace App\Http\Controllers;

use App\Models\FuelOptions;

class FuelOptionController extends Controller
{
    public function fuelOption()
    {
        $fuelType = $_POST['fuel'];
        $options = [];
        if ($fuelType == 6) {
            $fuelOptions = FuelOptions::findMany([1, 2, 3, 4]);

            foreach ($fuelOptions as $option) {

                $options[] = ['id' => $option->id, 'name' => $option->name];

            }
        } else {
            $fuelOptions = FuelOptions::where('id', 5)->get();

            foreach ($fuelOptions as $option) {

                $options[] = ['id' => $option->id, 'name' => $option->name];
            }
        }

        return json_encode($options);

    }

}
