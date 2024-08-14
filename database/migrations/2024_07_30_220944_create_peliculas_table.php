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
    Schema::create('peliculas', function (Blueprint $table) {
        $table->id();
        $table->string('titulo', 255)->nullable(false);
        $table->text('descripcion');
        $table->unsignedBigInteger('director_id'); 
        $table->year('anio')->nullable(false);
        $table->unsignedBigInteger('genero_id'); 
        $table->integer('duracion')->nullable(false);
        $table->timestamps();
        
        // Agregamos las restricciones de clave foránea
        $table->foreign('director_id')->references('id')->on('directores');
        $table->foreign('genero_id')->references('id')->on('generos');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
