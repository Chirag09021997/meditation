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
        Schema::create('workshop_interest_type', function (Blueprint $table) {
            $table->unsignedBigInteger('interest_id');
            $table->unsignedBigInteger('workshop_id');
            $table->primary(['interest_id', 'workshop_id']);
            $table->foreign('interest_id')->references('id')->on('interest')->onDelete('cascade');
            $table->foreign('workshop_id')->references('id')->on('workshop')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshop_interest_type');
    }
};
