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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Column for post title
            $table->text('content'); // Column for post content
            $table->string('slug')->unique(); // Column for post slug
            $table->boolean('is_published')->default(false); // Column for post publication status
            $table->timestamp('published_at')->nullable(); // Column for post publication date
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key for user who created the post
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null'); // Foreign key for post category, nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
