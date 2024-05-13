<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('detail_films', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->constrained()->onDelete('cascade')->unique();
            $table->string('code_film')->unique();
            $table->string('url_imdb')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_films');
    }
};
