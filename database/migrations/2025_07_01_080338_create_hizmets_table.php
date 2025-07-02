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
        Schema::create('hizmets', function (Blueprint $table) {
            $table->id();
            $table->string('menu');
            $table->string('baslik');
            $table->string('resim')->nullable();
            $table->longtext('metin')->nullable();
            $table->integer('durum')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hizmets');
    }
};
