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
        Schema::create('matchings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_user_reservations_id')->constrained()->onDelete('cascade'); //resrvesテーブルのid
            $table->date('matching_date'); //決まった日付
            $table->time('start_time'); //決まった日付
            $table->time('finish_time'); //決まった日付
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchings');
    }
};
