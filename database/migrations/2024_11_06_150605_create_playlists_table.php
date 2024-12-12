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
        Schema::create('playlists', function (Blueprint $table) {
            if (!Schema::hasTable('playlists')) {
                $table->id();
                $table->string('name');
                $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Assuming playlists belong to users
                $table->string('image')->nullable();
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlists');
    }
};
