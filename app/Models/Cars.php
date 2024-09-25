<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
   
    protected $fillable = [
        'name',
        'brand',
        'car_model',
        'year',
        'car_type',
        'daily_rent_price',
        'availability',
        'image'
    ];
}
