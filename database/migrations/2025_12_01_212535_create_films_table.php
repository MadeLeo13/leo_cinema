<?php

// database/migrations/xxxx_create_films_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Judul film
            $table->text('sinopsis'); // Sinopsis film
            $table->integer('tahun_rilis'); // Tahun rilis
            $table->string('genre')->nullable(); // Genre
            $table->string('poster')->nullable(); // Kolom untuk poster film
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('films');
    }
};