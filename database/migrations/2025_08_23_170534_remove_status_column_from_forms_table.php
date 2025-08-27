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
        Schema::table('forms', function (Blueprint $table) {
            // Drop the status column
            $table->dropColumn('status');
            
            // Drop the index that includes status
            $table->dropIndex(['status', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            // Recreate the status column
            $table->enum('status', [
                'pending',
                'reviewed', 
                'approved',
                'rejected',
                'active',
                'completed'
            ])->default('pending')->after('screenshot_instagram_path');
            
            // Recreate the index
            $table->index(['status', 'created_at']);
        });
    }
};
