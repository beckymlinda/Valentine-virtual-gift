<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoupleGoal extends Model
{
    protected $fillable = ['goal', 'is_completed',
    'due_date' => 'date'];
    protected $casts = [
        'due_date' => 'date',  // Ensure it's treated as a date
        'is_completed' => 'boolean',] ;
    //
}
