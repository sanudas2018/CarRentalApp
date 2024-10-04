<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'car_id',
        'name',
        'email',
        'phone',
        'start_date',
        'end_date',
        'total_cost'
    ];
}
