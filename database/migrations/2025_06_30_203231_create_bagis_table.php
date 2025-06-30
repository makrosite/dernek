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
        Schema::create('bagis', function (Blueprint $table) {
            $table->id();
            $table->string('adsoyad');
            $table->text('aciklama')->nullable();
            $table->integer('banka')->nullable();
            $table->integer('tutar')->nullable();
            $table->integer('durum')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bagis');
    }
};
