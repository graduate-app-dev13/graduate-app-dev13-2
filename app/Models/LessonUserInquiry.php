<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonUserInquiry extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'lesson_id',
        'user_id',
        'category_id',
        'category_name',
        'inquiry_detail',
    ];
    
    protected $table = 'lesson_user_inquiries';
    
    public function userLessonUserInquiry()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function lessonLessonUserInquiry()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }
    
    public function categoryLessonUserInquiry()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    //問い合わせ一覧
    public static function getAllOrderByUpdated_at()
    {
        return self::orderBy('updated_at', 'desc')->get();
    }
}
