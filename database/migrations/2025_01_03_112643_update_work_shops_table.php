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
        Schema::table('work_shops', function (Blueprint $table) {
            $table->string('hi_video_url')->nullable(); // Add hi_video_url
            $table->string('en_video_url')->nullable(); // Add lo_video_url
            $table->dropColumn('video_url');           // Remove video_url
        });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('work_shops', function (Blueprint $table) {
            $table->dropColumn('hi_video_url');        // Remove hi_video_url
            $table->dropColumn('en_video_url');        // Remove lo_video_url
            $table->string('video_url')->nullable();  // Add video_url back
        });
        }
};
