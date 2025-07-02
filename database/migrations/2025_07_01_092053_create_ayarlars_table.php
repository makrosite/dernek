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
        Schema::create('ayarlar', function (Blueprint $table) {
            $table->id();
            $table->string('baslik');
            $table->longText('decs')->nullable();
            $table->longText('keywords')->nullable();
            $table->text('footer')->nullable();
            $table->string('logo')->nullable();
            $table->string('bc')->nullable();
            $table->string('footerlogo')->nullable();
            $table->integer('bakimmodu')->default(0);
            $table->string('renk')->nullable();
            $table->string('googleapi')->nullable();
            $table->string('footerrenk')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayarlar');
    }
};
