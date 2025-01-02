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
        Schema::create('meditation_audio_interest_type', function (Blueprint $table) {
            $table->unsignedBigInteger('interest_id');
            $table->unsignedBigInteger('meditation_audio_id');
            $table->primary(['interest_id', 'meditation_audio_id']);
            $table->foreign('interest_id')->references('id')->on('interest')->onDelete('cascade');
            $table->foreign('meditation_audio_id')->references('id')->on('meditation_audio')->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meditation_audio_interest_type');
    }
};
