<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 企業団体が行う授業の登録
     */
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id(); //授業id
            $table->foreignId('company_id')->constrained()->cascadeOnDelete(); //企業id
            $table->string('lesson_name'); //授業名
            $table->string('lesson_detail'); //授業の詳細内容
            $table->string('lesson_type'); //授業のタイプ オンライン、対面
            $table->boolean('supports_career_edu'); //キャリア教育かどうか

            $table->text('child_preparation_item')->nullable(); //子どもの準備物
            $table->text('venue_preparation_item')->nullable(); //会場の準備物
            $table->string('venue_location')->nullable(); // 授業実施場所

            $table->boolean('japanease')->default(false); //国語
            $table->boolean('math')->default(false); //算数
            $table->boolean('society')->default(false); //社会
            $table->boolean('science')->default(false); //理科
            $table->boolean('english')->default(false); //外国語
            $table->boolean('music')->default(false); //音楽
            $table->boolean('art_and_crafts')->default(false); //図工
            $table->boolean('home_economics')->default(false); //家庭科
            $table->boolean('physical_education')->default(false); //体育
            $table->boolean('life_skills')->default(false); //生活
            $table->boolean('ethics')->default(false); //道徳
            $table->boolean('integrated_studies')->default(false); //総合
            $table->boolean('special_activities')->default(false); //特別活動
            $table->boolean('club_activities')->default(false); //クラブ活動
            $table->boolean('one')->default(false); //１年生
            $table->boolean('two')->default(false); //２年生
            $table->boolean('three')->default(false); //３年生
            $table->boolean('four')->default(false); //４年生
            $table->boolean('five')->default(false); //５年生
            $table->boolean('six')->default(false); //６年生
            $table->boolean('seven')->default(false); //特別支援

            $table->boolean('sdgs_edu')->default(false);                 // ①SDGs教育
            $table->boolean('info_edu')->default(false);                 // ②情報教育
            $table->boolean('ict_edu')->default(false);                  // ③ICT教育
            $table->boolean('copyright_edu')->default(false);            // ④著作権教育
            $table->boolean('net_literacy_edu')->default(false);         // ⑤ネットリテラシー教育
            $table->boolean('net_moral_edu')->default(false);            // ⑥ネットモラル教育
            $table->boolean('programming_edu')->default(false);          // ⑦プログラミング教育
            $table->boolean('career_edu')->default(false);               // ⑧キャリア教育
            $table->boolean('entrepreneurship_edu')->default(false);     // ⑨起業家精神教育
            $table->boolean('financial_edu')->default(false);            // ⑩金融教育
            $table->boolean('food_edu')->default(false);                 // ⑪食育
            $table->boolean('health_edu')->default(false);               // ⑫健康教育
            $table->boolean('disaster_edu')->default(false);             // ⑬防災教育
            $table->boolean('lgbt_edu')->default(false);                 // ⑭LGBT教育
            $table->boolean('gender_diversity_edu')->default(false);     // ⑮「性の多様性」教育
            $table->boolean('sexual_violence_edu')->default(false);      // ⑯性暴力に関する教育
            $table->boolean('sexuality_edu')->default(false);            // ⑰性教育
            $table->boolean('cancer_edu')->default(false);               // ⑱癌教育
            $table->boolean('foreign_language_edu')->default(false);    // ⑲外国語教育
            $table->boolean('international_understanding_edu')->default(false); // ⑳国際理解教育
            $table->boolean('volunteer_edu')->default(false);           // 21ボランティア教育
            $table->boolean('multicultural_coexistence_edu')->default(false); // 22多文化共生教育
            $table->boolean('peace_edu')->default(false);               // 23平和教育
            $table->boolean('consumer_edu')->default(false);            // 24消費者教育
            $table->boolean('local_edu')->default(false);               // 25郷土教育
            $table->boolean('human_rights_edu')->default(false);        // 26人権教育
            $table->boolean('sovereign_edu')->default(false);           // 27主権者教育
            $table->boolean('school_link_edu')->default(false);         // 28小中連携教育
            $table->boolean('art_edu')->default(false);                 // 29芸術教育
            $table->boolean('special_support_edu')->default(false);     // 30特別支援教育
            $table->boolean('universal_design_edu')->default(false);    // 31ユニバーサルデザイン教育
            $table->boolean('inclusive_edu')->default(false);           // 32インクルーシブ教育
            $table->boolean('environment_edu')->default(false);         // 33環境教育
            $table->boolean('safety_edu')->default(false);           // 34安全教育
            $table->boolean('traffic_safety_edu')->default(false);  // 35交通安全教育
            $table->boolean('nature_experience_edu')->default(false); // 36自然体験教育
            $table->boolean('welfare_edu')->default(false);         // 37福祉教育
            $table->boolean('normative_consciousness_edu')->default(false); // 38規範意識教育
            $table->boolean('moral_edu')->default(false);           // 39道徳教育
            $table->boolean('mind_edu')->default(false);            // 40心の教育
            $table->boolean('museum_edu')->default(false);          // 41博物館教育
            $table->boolean('animal_protection_edu')->default(false); // 42動物愛護教育
            $table->boolean('library_use_edu')->default(false);     // 43図書館活用教育
            $table->boolean('nie_edu')->default(false);             // 44ＮＩＥ教育（新聞を学校教育に取り入れる）
            $table->boolean('posting_edu')->default(false);         // 45掲示教育

            $table->string('image')->nullable(); // 画像を保存するカラムを追加します
            $table->string('image_path_one')->nullable(); // 授業の画像1のパス
            $table->string('image_path_two')->nullable(); // 授業の画像2のパス
            $table->string('image_path_three')->nullable(); // 授業の画像3のパス
            $table->string('image_path_four')->nullable(); // 授業の画像4のパス
            $table->string('image_path_five')->nullable(); // 授業の画像5のパス
            $table->string('image_path_six')->nullable(); // 授業の画像6のパス
            $table->string('image_path_seven')->nullable(); // 授業の画像7のパス
            $table->string('image_path_eight')->nullable(); // 授業の画像8のパス
            $table->string('image_path_nine')->nullable(); // 授業の画像9のパス
            $table->string('image_path_ten')->nullable(); // 授業の画像10のパス
            $table->string('image_path_eleven')->nullable(); // 授業の画像11のパス

            $table->date('started_date'); //実施可能期間 スタート
            $table->date('finished_date'); //実施可能期間 ゴール
            $table->boolean('is_reservable')->default(true); // 予約可能

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }

    //中間テーブル.  授業の予約時の授業とユーザーの登録
};
