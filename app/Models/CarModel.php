<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CarModel extends Model
{
    use HasFactory;

    public function carMake(): HasOne
    {
        return $this->hasOne(CarMake::class, 'id', 'make_id');
    }
}
