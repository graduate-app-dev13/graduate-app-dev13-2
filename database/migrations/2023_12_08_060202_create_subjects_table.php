<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 現在使用していません
     *
     * 授業に教科の情報を紐付ける
     */
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id(); //教科id
            $table->foreignId('lesson_id')->constrained()->cascadeOnDelete();
            $table->boolean('Japanese'); //国語
            $table->boolean('Mathematics'); //算数
            $table->boolean('SocialStudies'); //社会
            $table->boolean('Science'); //理科
            $table->boolean('Music'); //音楽
            $table->boolean('ArtAndCrafts'); //図画工作
            $table->boolean('HomeEconomics'); //家庭科
            $table->boolean('PhysicalEducation'); //体育
            $table->boolean('ForeignLanguage'); //外国語
            $table->boolean('LifeSkills'); //生活
            $table->boolean('IntegratedStudies'); //総合
            $table->boolean('Morale'); //道徳
            $table->boolean('SpecialActivities'); // 特別活動
            $table->boolean('ClubActivities'); // クラブ活動
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
