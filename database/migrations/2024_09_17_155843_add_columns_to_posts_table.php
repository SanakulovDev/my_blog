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
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->json('description')->nullable();
            $table->json('body')->nullable()->change();
            $table->timestamp('published_at')->nullable(); // Yangi ustun 'published_at'
            $table->boolean('is_featured')->default(false); // Yangi ustun 'is_featured'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Foreign key ni olib tashlash
            $table->dropColumn('user_id');
            $table->dropColumn('category_id');
            $table->dropColumn('published_at');
            $table->dropColumn('is_featured');
            $table->dropColumn('description');
            $table->dropColumn('is_featured');
        });
    }
};
