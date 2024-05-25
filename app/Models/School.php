<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'id',
    //     'created_at',
    //     'updated_at',
    // ];

    public function userSchools()
    {
        return $this->hasMany(User::class, 'school_id');
    }

    public function schoolLessonUserReservations()
    {
        return $this->hasMany(LessonUserReservation::class);
    }
}
