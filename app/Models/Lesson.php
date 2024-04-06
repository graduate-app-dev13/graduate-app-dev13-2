<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//app/Models/Lesson.php
//授業テーブルの操作
class Lesson extends Model
{
    use HasFactory;
    
    protected $guarded = [
    'id',
    'created_at',
    'updated_at',
    ];
    
    
    //更新日で並び替え
    public static function getAllOrderByUpdated_at()
    {
       return self::orderBy('id', 'asc')->get();
    }
    
    //単元テーブルと結合
    public function lessonUnits()
    {
        return $this->belongsToMany(Unit::class)->withTimestamps();
    }
    
    //Userテーブルと結合
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    
    //Companyテーブルと結合
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }
}
