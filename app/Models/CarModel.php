<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    public function carMake()
    {
        return $this->hasOne(CarMake::class, 'id', 'make_id');
    }
}
