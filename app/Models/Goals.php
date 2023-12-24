<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
    use HasFactory;



    protected $fillable = [
        'user_id',
        'goal_type',
        'start_date',
        'end_date',
        'target_value',
        'current_progress',
    ];
}
