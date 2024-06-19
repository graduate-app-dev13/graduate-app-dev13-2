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
            $table->integer('school_number'); // 学校番号
            $table->string('tel_number'); // 電話番号
            $table->string('fax_number')->nullable(); // FAX番号
            $table->string('email')->nullable(); // 学校メール
            $table->string('post_code', 10); // 郵便番号 (郵便番号の一般的な長さを考慮)
            $table->string('address1'); // 住所 県名
            $table->string('address2'); // 住所 市区町村
            $table->string('address3'); // 住所 番地
            $table->unsignedInteger('area_id')->default(0); // 地域id default 0:該当なし
            $table->unsignedTinyInteger('invalid_flag')->default(0); // 無効フラグ 0:有効 1:無効 2:削除 デフォルト0
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
