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
        Schema::table('crud', function (Blueprint $table) {
            $table->string('title')->change();
        });
    }
    
    public function down(): void
    {
        Schema::table('crud', function (Blueprint $table) {
            $table->json('title')->change();
        });
    }
    
};
