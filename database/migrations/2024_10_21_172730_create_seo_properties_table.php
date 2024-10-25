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
        Schema::create('seo_properties', function (Blueprint $table) {
            $table->id();
            $table->enum('pageName',['home','resume','projects','contact'])->default('home');
            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('ogSiteName')->nullable();
            $table->string('ogTitle')->nullable();
            $table->string('ogDescription')->nullable();
            $table->string('ogImage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_properties');
    }
};
