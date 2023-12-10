<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_user_reservations_id', 
        'matching_date','start_time',
        'finish_time'
    ];
}
