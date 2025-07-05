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
        Schema::create('uyelers', function (Blueprint $table) {
            $table->id();
            $table->string('adi')->nullable();
            $table->string('soyadi')->nullable();
            $table->string('baba_adi')->nullable();
            $table->string('anne_adi')->nullable();
            $table->string('dogum_yeri')->nullable();
            $table->date('dogum_tarihi')->nullable();
            $table->string('tc_kimlik_no', 11)->nullable();
            $table->string('meslegi')->nullable();
            $table->string('kan_grubu')->nullable();
            $table->string('is_telefonu')->nullable();
            $table->string('ev_telefonu')->nullable();
            $table->string('cep_telefonu')->nullable();
            $table->string('eposta')->nullable();
            $table->string('nufusa_kayit_il_ilce_mahalle')->nullable();
            $table->text('ikamet_adresi')->nullable();
            $table->text('is_adresi')->nullable();
            $table->string('ogrenim_durumu')->nullable();
            $table->integer('durum')->default(1);
            $table->string('firmaunvanı')->nullable();
            $table->string('resim')->default('resimyok.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uyelers');
    }
};
