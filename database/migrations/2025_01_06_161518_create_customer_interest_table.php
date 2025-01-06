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
        Schema::create('customer_interest', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('interest_id');
            $table->primary(['customer_id', 'interest_id']);
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('interest')->onDelete('cascade');
            $table->foreign('interest_id')->references('id')->on('work_shops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_interest');
    }
};
