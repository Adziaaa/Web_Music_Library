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
        Schema::create('albums', function (Blueprint $table) {
            if (!Schema::hasTable('albums')) {
                $table->id();
                $table->string('title');
                $table->integer('song_count');
                $table->foreignId('artist_id')->constrained()->onDelete('cascade');
                $table->string('image')->nullable();
                $table->integer('duration')->nullable(); // duration in seconds
                $table->date('release_date')->nullable();
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
