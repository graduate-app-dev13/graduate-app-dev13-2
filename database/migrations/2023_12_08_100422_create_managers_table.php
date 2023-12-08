<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 企業団体の担当者の情報の登録
     */
    public function up(): void
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id();//企業担当者id
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();//企業id
            $table->string('manager_name');//名前
            $table->string('email')->unique();//メアド
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');//パスワード
            $table->timestamp('deleted_at')->nullable(); // 削除日
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};
