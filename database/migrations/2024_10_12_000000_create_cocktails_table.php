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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('text1_en')->nullable();
            $table->text('text1_de')->nullable();
            $table->text('text1_en-us')->nullable();
            $table->text('imgroute')->nullable();
            $table->text('alt')->nullable();
            $table->text('text2_en')->nullable();
            $table->text('text2_de')->nullable();
            $table->text('text2_en-us')->nullable();
            $table->text('text3_en')->nullable();
            $table->text('text3_de')->nullable();
            $table->text('text3_en-us')->nullable();
            $table->text('video')->nullable();
            $table->text('link')->nullable();
            $table->text('originalImage')->nullable();
            $table->text('appear1')->nullable();
            $table->text('appear2')->nullable();
            $table->text('appear3')->nullable();
            $table->text('appear4')->nullable();
            $table->text('category_en')->nullable();
            $table->text('category_de')->nullable();
            $table->text('category_en-us')->nullable();
            $table->text('imgSlideCocktail')->nullable();
            $table->text('textSlideCocktail_en')->nullable();
            $table->text('textSlideCocktail_de')->nullable();
            $table->text('textSlideCocktail_en-us')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};
