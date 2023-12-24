<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionTracking extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'food_item',
        'calories_intake',
        'macronutrients',
        'meal_time',
        'date',
    ];
}
