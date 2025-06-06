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
        Schema::table('meditation_audio', function (Blueprint $table) {
            $table->string('inner_thumb')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('meditation_audio', function (Blueprint $table) {
            $table->dropColumn('inner_thumb');
        });
    }
};
