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
        Schema::create('adaext', function (Blueprint $table) {
            $table->id(); 
            $table->string('title'); 
            $table->string('artist'); 
            $table->year('year'); 
            $table->string('genre'); 
            $table->string('rating'); 
            $table->text('description'); 
            $table->string('audio')->nullable();
            $table->string('image');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adaext');
    }
};
