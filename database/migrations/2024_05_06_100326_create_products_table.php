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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sleeve',255);
            $table->string('img_one',255);
            $table->string('img_two',255);
            $table->string('img_three',255);
            $table->string('img_four',255);
            $table->string('title',255);
            $table->string('new_or_old',255);
            $table->string('price',255);
            $table->string('category',255);
            $table->string('tags',255);
            $table->string('details',255);
            $table->string('sku',255);
            $table->string('href',255);
            $table->string('description',255);
            $table->string('discount',255);
            $table->string('og_price',255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
