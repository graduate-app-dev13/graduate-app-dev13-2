<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 企業団体の登録情報
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->text('company_name'); // 企業名
            $table->string('tel_number'); // 電話番号
            $table->string('fax_number'); // FAX番号
            $table->string('email'); // 企業メール
            $table->string('post_code'); // 郵便番号
            $table->text('address'); // 住所
            $table->text('hp_url'); // HP
            $table->timestamp('deleted_at')->nullable(); // 削除日
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
