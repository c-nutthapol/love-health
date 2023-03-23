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
        Schema::create('daily_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id', 0, 1)->comment('รหัสผู้ใช้');
            $table->bigInteger('food_id', 0, 1)->comment('รหัสอาหาร');
            $table->bigInteger('posture_id', 0, 1)->comment('รหัสท่าออกกำลังกาย');
            $table->integer('time_exercising')->comment('เวลาที่ใช้ออกกำลังกาย (นาที)');
            $table->string('emotion')->comment('อารมณ์ความรู้สึก');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('food_id')->references('id')->on('food')->cascadeOnDelete();
            $table->foreign('posture_id')->references('id')->on('exercise_postures')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_infos');
    }
};
