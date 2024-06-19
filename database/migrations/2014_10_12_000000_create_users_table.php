<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');//名前
            $table->string('email')->unique();//メアド
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');//パスワード
            $table->integer('user_role_id')->default(0);//ユーザーロールID//user_role_id 0:該当なし 1:管理者 2:教員 3:生徒
            $table->integer('invalid_flag')->default(0);//無効フラグ 0:有効 1:無効 2:削除 デフォルト0
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
