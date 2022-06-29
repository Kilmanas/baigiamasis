<?php

namespace App\Http\Controllers;

use App\Models\FuelOptions;

class FuelOptionController extends Controller
{
    public function fuelOption()
    {
        $fuelType = $_POST['fuel'];
        $fuelOptions = FuelOptions::where('fuel_type_id', $fuelType)->get();
        $options = [];
        foreach ($fuelOptions as $option) {
            $options[] = ['id' => $option->id, 'name' => $option->name];
        }

        return json_encode($options);
    }
}
