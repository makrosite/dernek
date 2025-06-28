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
        Schema::create('site_ayar', function (Blueprint $table) {
            $table->id();
            $table->string('sitebasligi');
            $table->string('aciklama');
            $table->string('logo');
            $table->string('baslikresim')->nullable();
            $table->text('footer')->nullable();
            $table->text('keyword')->nullable();
            $table->string('renk')->nullable();
            $table->integer('bakim')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_ayar');
    }
};
