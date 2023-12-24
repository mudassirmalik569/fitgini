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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            // id, user_id, goal_type, start_date, end_date, target_value, current_progress
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string("goal_type")->nullable();
            $table->string("start_date")->nullable();
            $table->string("end_date")->nullable();
            $table->string("target_value")->nullable();
            $table->string("current_progress")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
