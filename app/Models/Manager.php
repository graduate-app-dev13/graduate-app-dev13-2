<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
         //lessons_idをsubjectsに結合
    public function companyManager()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
