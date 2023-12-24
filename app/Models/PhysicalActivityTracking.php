<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalActivityTracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'activity_type',
        'date',
        'duration',
        'calories_burned',
    ];
}


