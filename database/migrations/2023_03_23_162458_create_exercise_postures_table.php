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
        Schema::create('exercise_postures', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ชื่อท่าออกกำลังกาย');
            $table->double('calorie', 7, 2)->comment('1 ชม.ลดกี่แคลอรี่');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_postures');
    }
};
