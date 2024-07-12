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
            $table->text('text1_us')->nullable();
            $table->text('imgroute')->nullable();
            $table->text('alt')->nullable();
            $table->text('text2_en')->nullable();
            $table->text('text2_de')->nullable();
            $table->text('text2_us')->nullable();
            $table->text('text3_en')->nullable();
            $table->text('text3_de')->nullable();
            $table->text('text3_us')->nullable();
            $table->text('video')->nullable();
            $table->text('link')->nullable();
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
