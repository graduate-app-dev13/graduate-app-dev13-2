<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 授業の予約情報の登録
     */
    public function up(): void
    {
        Schema::create('lesson_user_reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')->constrained()->cascadeOnDelete();//授業id
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();//teacherid
          
            $table->date('first_choice_date');// 第１希望日
            $table->time('first_choice_start_time');// 第１希望日の希望開始時間
            $table->time('first_choice_end_time');// 第１希望日の希望終了時間
            $table->date('second_choice_date'); // 第２希望日
            $table->time('second_choice_start_time'); // 第２希望日の希望開始時間
            $table->time('second_choice_end_time'); // 第２希望日の希望終了時間
            $table->date('third_choice_date'); // 第３希望日
            $table->time('third_choice_start_time');// 第３希望日の希望開始時間
            $table->time('third_choice_end_time');// 第３希望日の希望終了時間
            $table->string('number_student');// 人数
            $table->string('graduate'); // 学年
            $table->string('subject'); // 教科
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_user_reservations');
    }
};
