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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('mission',255);
            $table->string('vision',255);
            $table->string('objective',255);
            $table->string('title',255);
            $table->string('information',255);
            $table->string('mission_img',255);
            $table->string('vision_img',255);
            $table->string('objective_img',255);
            $table->string('information_img',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
