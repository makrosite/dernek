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
        Schema::create('mesajlar', function (Blueprint $table) {
            $table->id();
            $table->string('adsoyad');
            $table->string('telefon');
            $table->string('eposta');
            $table->string('sektor');
            $table->string('konu');
            $table->text('mesaj');
            $table->integer('okundu')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesajlar');
    }
};
