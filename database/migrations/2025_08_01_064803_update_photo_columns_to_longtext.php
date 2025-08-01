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
        // Update posts table
        Schema::table('posts', function (Blueprint $table) {
            $table->longText('photo')->nullable()->change();
        });

        // Update categories table
        Schema::table('categories', function (Blueprint $table) {
            $table->longText('photo')->nullable()->change();
        });

        // Update testimonials table
        Schema::table('testimonials', function (Blueprint $table) {
            $table->longText('photo')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert posts table
        Schema::table('posts', function (Blueprint $table) {
            $table->string('photo')->nullable()->change();
        });

        // Revert categories table
        Schema::table('categories', function (Blueprint $table) {
            $table->string('photo')->nullable()->change();
        });

        // Revert testimonials table
        Schema::table('testimonials', function (Blueprint $table) {
            $table->string('photo')->nullable()->change();
        });
    }
};
