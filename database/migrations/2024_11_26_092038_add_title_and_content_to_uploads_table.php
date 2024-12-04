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
        Schema::table('uploads', function (Blueprint $table) {
            $table->string('title')->after('id'); // Adds a string field for the title
            $table->text('content')->nullable()->after('title'); // Adds a text field for content, allowing it to be null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('uploads', function (Blueprint $table) {
            $table->dropColumn(['title', 'content']); // Drops the title and content fields if the migration is rolled back
        });
    }
};
