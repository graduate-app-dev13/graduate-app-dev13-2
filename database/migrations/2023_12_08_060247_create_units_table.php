<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 授業の単元の登録
     */
    public function up(): void
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();//単元id
            $table->text('unit_name');//単元名
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
