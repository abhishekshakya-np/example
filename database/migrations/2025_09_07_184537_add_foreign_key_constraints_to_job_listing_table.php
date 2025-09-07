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
        Schema::table('job_listing', function (Blueprint $table) {
            // Add foreign key constraint
            $table->foreign('employer_id')->references('id')->on('employers')->onDelete('cascade');

            // Add indexes for better performance
            $table->index('employer_id');
            $table->index('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listing', function (Blueprint $table) {
            // Drop foreign key constraint
            $table->dropForeign(['employer_id']);

            // Drop indexes
            $table->dropIndex(['employer_id']);
            $table->dropIndex(['title']);
        });
    }
};
