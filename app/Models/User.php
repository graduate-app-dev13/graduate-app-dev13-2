<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'school_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    // schoolテーブルのschool_idとのリレーションシップ
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id');
    }
    // schoolテーブルのschool_idとのリレーションシップ
    public function Lessons()
    {
        return $this->belongsToMany(Lesson::class)->withTimestamps();;
    }

    public function userLessonUserReservations()
    {
        return $this->hasMany(LessonUserReservation::class);
    }

    public function routeNotificationForMail($notification)
    {
        // メールアドレスのみを返す場合
        return $this->email_address;

        // 名前とメールアドレスを返す場合
        // return [$this->email_address => $this->name];
    }

    public function getSchoolNameAttribute()
    {
        return $this->school ? $this->school->school_name : '学校名が未設定です';
    }
}
