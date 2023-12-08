<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'Japanese',
        'Mathematics',
        'SocialStudies',
        'Science',
        'Music',
        'ArtAndCrafts',
        'HomeEconomics',
        'PhysicalEducation',
        'ForeignLanguage',
        'LifeSkills',
        'IntegratedStudies',
        'Morale',
        'SpecialActivities',
    ];

    //lessons_idをsubjectsに結合
    public function lessonSubject()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }
}
