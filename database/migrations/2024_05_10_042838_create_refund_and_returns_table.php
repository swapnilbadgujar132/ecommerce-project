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
        Schema::create('refund_and_returns', function (Blueprint $table) {
            $table->id();
            $table->string('timeline',255);
            $table->string('condition',255);
            $table->string('policies',255);
            $table->string('support',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refund_and_returns');
    }
};



