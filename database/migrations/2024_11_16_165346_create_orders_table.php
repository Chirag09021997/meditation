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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->enum('coupon_type', ['Percentage', 'Amount'])->nullable();
            $table->string('coupon_code')->nullable();
            $table->decimal('coupon_value')->default(0.00)->nullable();
            $table->string('payment_option')->nullable();
            $table->text('note')->nullable();
            $table->enum('status', ['Pending', 'Complete', 'Shipping', 'Cancel'])->default('Pending');
            $table->timestamps();
            // $table->foreign('customer_id')->references('id')->on('customers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
