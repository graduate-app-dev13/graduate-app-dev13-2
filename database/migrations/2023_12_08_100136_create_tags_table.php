<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 授業の検索時に条件になるように登録するタグ
     */
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();//タグid
            $table->string('tag_name'); //タグ名
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
