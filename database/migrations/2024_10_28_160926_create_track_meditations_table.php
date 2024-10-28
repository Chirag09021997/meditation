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
        Schema::create('track_meditations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('meditation_audio_id');
            $table->text('listening_time')->nullable();
            $table->text('total_time')->nullable();
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customers')->cascadeOnDelete();
            $table->foreign('meditation_audio_id')->references('id')->on('meditation_audio')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('track_meditations');
    }
};
