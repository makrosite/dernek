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
        Schema::create('sayfalar', function (Blueprint $table) {
            $table->id();
            $table->string('sayfa_adi');
            $table->string('baslik');
            $table->string('metin')->nullable();
            $table->integer('durum')->default(1);
            $table->string('resim')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sayfalar');
    }
};
