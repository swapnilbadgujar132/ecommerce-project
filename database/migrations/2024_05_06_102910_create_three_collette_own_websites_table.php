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
        Schema::create('three_collette_own_websites', function (Blueprint $table) {
            $table->id();
            $table->string('title_1',255);
            $table->string('title_2',255);
            $table->string('title_3',255);
            $table->string('text_1',255);
            $table->string('text_2',255);
            $table->string('text_3',255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('three_collette_own_websites');
    }
};
