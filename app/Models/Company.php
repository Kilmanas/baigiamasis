<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Company extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable = [
        'name',
        'address',
        'phone',
    ];

    public $sortable = [
        'name',
        'address',
        'phone'
    ];
}
