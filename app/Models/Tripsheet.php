<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tripsheet extends Model
{
    use HasFactory;

    public function fuelType()
    {
        return $this->hasOne(FuelType::class, 'id', 'fuel_type_id');
    }

    public function fuelOption()
    {
        return $this->hasOne(FuelOptions::class, 'id', 'fuel_option_id');
    }

    public function carMake()
    {
        return $this->hasOne(CarMake::class, 'id', 'car_make_id');
    }

    public function carModel()
    {
        return $this->hasOne(CarModel::class, 'id', 'car_model_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
