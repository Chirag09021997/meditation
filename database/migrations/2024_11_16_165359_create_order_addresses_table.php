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
        Schema::create('order_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->string('b_phone')->nullable();
            $table->string('b_email')->nullable();
            $table->string('b_fname')->nullable();
            $table->string('b_lname')->nullable();
            $table->string('b_country')->nullable();
            $table->string('b_address')->nullable();
            $table->string('b_address2')->nullable();
            $table->string('b_city')->nullable();
            $table->string('b_state')->nullable();
            $table->string('b_zipcode')->nullable();
            $table->string('s_fname')->nullable();
            $table->string('s_lname')->nullable();
            $table->string('s_country')->nullable();
            $table->string('s_address')->nullable();
            $table->string('s_address2')->nullable();
            $table->string('s_city')->nullable();
            $table->string('s_state')->nullable();
            $table->string('s_zipcode')->nullable();
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_addresses');
    }
};
