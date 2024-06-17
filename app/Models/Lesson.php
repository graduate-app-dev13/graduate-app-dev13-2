<?php

namespace App\Models;

use Illuminate\Console\View\Components\TwoColumnDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\once;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public static function getEducationTypes()
    {
        return [
            'sdgs_edu' => 'SDGs教育',
            'info_edu' => '情報教育',
            'ict_edu' => 'ICT教育',
            'copyright_edu' => '著作権教育',
            'net_literacy_edu' => 'ネットリテラシー教育',
            'net_moral_edu' => 'ネットモラル教育',
            'programming_edu' => 'プログラミング教育',
            'career_edu' => 'キャリア教育',
            'entrepreneurship_edu' => '起業家精神教育',
            'financial_edu' => '金融教育',
            'food_edu' => '食育',
            'health_edu' => '健康教育',
            'disaster_edu' => '防災教育',
            'lgbt_edu' => 'LGBT教育',
            'gender_diversity_edu' => '性の多様性教育',
            'sexual_violence_edu' => '性暴力に関する教育',
            'sexuality_edu' => '性教育',
            'cancer_edu' => '癌教育',
            'foreign_language_edu' => '外国語教育',
            'international_understanding_edu' => '国際理解教育',
            'volunteer_edu' => 'ボランティア教育',
            'multicultural_coexistence_edu' => '多文化共生教育',
            'peace_edu' => '平和教育',
            'consumer_edu' => '消費者教育',
            'local_edu' => '郷土教育',
            'human_rights_edu' => '人権教育',
            'sovereign_edu' => '主権者教育',
            'school_link_edu' => '小中連携教育',
            'art_edu' => '芸術教育',
            'special_support_edu' => '特別支援教育',
            'universal_design_edu' => 'ユニバーサルデザイン教育',
            'inclusive_edu' => 'インクルーシブ教育',
            'environment_edu' => '環境教育',
            'safety_edu' => '安全教育',
            'traffic_safety_edu' => '交通安全教育',
            'nature_experience_edu' => '自然体験教育',
            'welfare_edu' => '福祉教育',
            'normative_consciousness_edu' => '規範意識教育',
            'moral_edu' => '道徳教育',
            'mind_edu' => '心の教育',
            'museum_edu' => '博物館教育',
            'animal_protection_edu' => '動物愛護教育',
            'library_use_edu' => '図書館活用教育',
            'nie_edu' => 'ＮＩＥ教育',
            'posting_edu' => '掲示教育'
        ];
    }

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
        return $this->belongsTo(Company::class, 'company_id');
    }
    //該当学年を取得
    public function getLessonGradesAttribute()
    {
        // テーブルのカラムがtrueか調べる
        $grades = [
            'one' => '1年生',
            'two' => '2年生',
            'three' => '3年生',
            'four' => '4年生',
            'five' => '5年生',
            'six' => '6年生',
            'seven' => '特別支援',
        ];
        // 該当する学年を取得
        $result = [];
        foreach ($grades as $column => $label) {
            if ($this->$column) {
                $result[] = $label;
            }
        }
        if (empty($result)){
            $result[] = "該当なし";
        }

        return $result;
    }
    // 該当教科を取得する
    public function getLessonSubjectsAttribute()
    {
        $subjects = [
            'japanease' => '国語',
            'math' => '算数',
            'society' => '社会',
            'science' => '理科',
            'english' => '外国語',
            'music' => '音楽',
            'art_and_crafts' => '図工',
            'home_economics' => '家庭科',
            'physical_education' => '体育',
            'life_skills' => '生活',
            'ethics' => '道徳',
            'integrated_studies' => '総合',
            'special_activities' => '特別活動',
            'club_activities' => 'クラブ活動',
        ];

        $result = [];
        foreach ($subjects as $column => $label) {
            if ($this->$column) {
                $result[] = $label;
            }
        }
        if (empty($result)){
            $result[] = "該当なし";
        }

        return $result;
    }

    // 該当教育タイプを取得する
    public function getLessonEducationTypesAttribute()
    {
        $educationTypes = self::getEducationTypes();

        $result = [];
        foreach ($educationTypes as $column => $label) {
            if ($this->$column) {
                $result[] = $label;
            }
        }
        if (empty($result)){
            $result[] = "該当なし";
        }

        return $result;
    }
}
