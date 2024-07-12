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
        Schema::create('cocktail_images', function (Blueprint $table) {
            $table->id();
            $table->text('imgroute')->nullable();
            $table->text('alt')->nullable();

            $table->unsignedBigInteger('cocktail_id')->nullable();
            $table->foreign('cocktail_id')->references('id')->on('cocktails');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktail_images');
    }
};
