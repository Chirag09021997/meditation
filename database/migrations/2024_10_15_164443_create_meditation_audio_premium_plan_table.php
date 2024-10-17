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
        Schema::create('meditation_audio_premium_plan', function (Blueprint $table) {
            $table->unsignedBigInteger('premium_plan_id');
            $table->unsignedBigInteger('meditation_audio_id');
            $table->primary(['premium_plan_id', 'meditation_audio_id']);
            $table->foreign('premium_plan_id')->references('id')->on('premium_plans')->onDelete('cascade');
            $table->foreign('meditation_audio_id')->references('id')->on('meditation_audio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meditation_audio_premium_plan');
    }
};
