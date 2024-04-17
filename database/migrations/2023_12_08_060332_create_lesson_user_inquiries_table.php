<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 問い合わせ情報の登録
     */
    public function up(): void
    {
        Schema::create('lesson_user_inquiries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')->constrained()->cascadeOnDelete(); //授業id
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); //teacherid
            $table->unique(['lesson_id', 'user_id']);
            $table->foreignId('category_id')->constrained()->cascadeOnDelete(); //カテゴリーid
            $table->string('category_name'); //カテゴリー名
            $table->string('inquiry_detail'); //問い合わせ内容
            $table->timestamp('deleted_at')->nullable(); // 削除日
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_user_inquiries');
    }
};
