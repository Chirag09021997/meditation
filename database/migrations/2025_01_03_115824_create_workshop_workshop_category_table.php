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
        Schema::create('workshop_workshop_category', function (Blueprint $table) {
            $table->unsignedBigInteger('workshop_category_id');
            $table->unsignedBigInteger('workshop_id');
            $table->primary(['workshop_category_id', 'workshop_id']);
            // $table->foreign('workshop_category_id')->references('id')->on('workshop_category')->onDelete('cascade');
            // $table->foreign('workshop_id')->references('id')->on('workshop')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshop_workshop_category');
    }
};
