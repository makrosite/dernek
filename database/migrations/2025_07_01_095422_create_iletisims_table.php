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
        Schema::create('iletisims', function (Blueprint $table) {
            $table->id();
            $table->string('telefon')->nullable();
            $table->string('gsm')->nullable();
            $table->string('eposta')->nullable();
            $table->string('wp')->nullable();
            $table->string('wpbutton')->nullable();
            $table->string('adres')->nullable();
            $table->text('maps')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iletisims');
    }
};
