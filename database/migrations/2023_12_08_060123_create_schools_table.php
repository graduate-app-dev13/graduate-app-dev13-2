<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 学校の登録情報
     */
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->text('school_name'); // 学校名
            $table->string('school_number'); // 学校番号
            $table->string('tel_number'); // 電話番号
            $table->string('fax_number'); // FAX番号
            $table->string('email'); // 学校メール
            $table->string('post_code'); // 郵便番号
            $table->text('address'); // 住所
            $table->string('area_id'); // 地域id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
