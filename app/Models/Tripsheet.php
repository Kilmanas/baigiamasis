<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Kyslik\ColumnSortable\Sortable;

class Tripsheet extends Model
{
    use HasFactory;
    use Sortable;

    public $sortable = [
        'id',
        'name',
        'period',
        'fuel_type_id',
        'fuel_used',
        'fuel_received,',
        'plate_no'
    ];

    public function fuelType(): HasOne
    {
        return $this->hasOne(FuelType::class, 'id', 'fuel_type_id');
    }

    public function fuelOption(): HasOne
    {
        return $this->hasOne(FuelOptions::class, 'id', 'fuel_option_id');
    }

    public function carMake(): HasOne
    {
        return $this->hasOne(CarMake::class, 'id', 'car_make_id');
    }

    public function carModel(): HasOne
    {
        return $this->hasOne(CarModel::class, 'id', 'car_model_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
