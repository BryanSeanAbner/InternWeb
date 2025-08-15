<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Create internship_benefits table
        Schema::create('internship_benefits', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });

        // Create requirements table
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });

        // Create apply_steps table
        Schema::create('apply_steps', function (Blueprint $table) {
            $table->id();
            $table->integer('step_number');
            $table->string('title');
            $table->text('description');
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apply_steps');
        Schema::dropIfExists('requirements');
        Schema::dropIfExists('internship_benefits');
    }
};
