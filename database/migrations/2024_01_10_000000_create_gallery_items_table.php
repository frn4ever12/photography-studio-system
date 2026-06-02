<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gallery_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gallery_id')->constrained('galleries')->onDelete('cascade');
            $table->enum('media_type', ['Image', 'Video']);
            $table->string('media_url');
            $table->string('thumbnail_url')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
            $table->index('gallery_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery_items');
    }
};
