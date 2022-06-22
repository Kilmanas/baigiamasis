<?php

namespace App\Http\Controllers;

use App\Models\CarModel;

class CarModelController extends Controller
{
    public function getModels()
    {

        $makeId = $_POST['make'] ?? 0;
        $models = [];
        $carModels = CarModel::where('make_id', $makeId)->get();

        foreach ($carModels as $model) {

            $models[] = ['id' => $model->id, 'name' => $model->name];

        }

        return json_encode($models);

    }
}
