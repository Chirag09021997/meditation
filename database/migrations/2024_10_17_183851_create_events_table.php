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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('thumb_image')->nullable();
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->dateTime('starting_date')->nullable();
            $table->string('location')->nullable();
            $table->enum('is_paid', ['On', 'Off'])->default('Off');
            $table->decimal('fees', 10, 2)->default(0.00);
            $table->integer('total_joining')->default(0);
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
