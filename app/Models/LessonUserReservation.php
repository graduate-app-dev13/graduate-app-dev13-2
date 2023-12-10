<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonUserReservation extends Model
{
    use HasFactory;
    
     protected $table = 'lesson_user_reservations';
    
     protected $fillable = [
    'user_id', 'lesson_id', 'first_choice_date', 'first_choice_start_time', 
    'first_choice_end_time', 'second_choice_date', 'second_choice_start_time', 
    'second_choice_end_time', 'third_choice_date', 'third_choice_start_time', 
    'third_choice_end_time','graduate','number_student','subject'
        ];

    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }
    //予約一覧
    public static function getAllOrderByUpdated_at()
    {
        return self::orderBy('updated_at', 'desc')->get();
    }
    
    //matching 予約の確定
    public function matching()
    {
        return $this->belongsTo(Matching::class,'lesson_user_reservation_id');
    }

}
