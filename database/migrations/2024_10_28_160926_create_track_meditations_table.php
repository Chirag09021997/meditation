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
            $table->integer('customer_id');
            $table->integer('meditation_audio_id');
            $table->text('listening_time')->nullable();
            $table->text('total_time')->nullable();
            $table->timestamps();
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
