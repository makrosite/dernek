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
        Schema::create('yonetim_kurulu_models', function (Blueprint $table) {
            $table->id();
            $table->string('adsoyad')->nullable();
            $table->string('meslek')->nullable();
            $table->string('telefon')->nullable();
            $table->string('eposta')->nullable();
            $table->string('unvan')->nullable();
            $table->longText('hakkinda')->nullable();
            $table->string('resim')->nullable();
            $table->integer('durum')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yonetim_kurulu_models');
    }
};
