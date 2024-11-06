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
        Schema::create('songs', function (Blueprint $table) {
            if (!Schema::hasTable('songs')) {
                $table->id();
                $table->string('title');
                $table->foreignId('album_id')->nullable()->constrained()->onDelete('set null');
                $table->foreignId('artist_id')->constrained()->onDelete('cascade');
                $table->string('image')->nullable();
                $table->integer('duration')->nullable(); // duration in seconds
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
