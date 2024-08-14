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
    Schema::create('funciones', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('pelicula_id');
        $table->unsignedBigInteger('sala_id');
        $table->date('fecha')->nullable(false);
        $table->time('hora')->nullable(false);
        $table->timestamps();

        // Restricciones de clave foránea
        $table->foreign('pelicula_id')->references('id')->on('peliculas');
        $table->foreign('sala_id')->references('id')->on('salas');
    });
}




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funciones');
    }
};
