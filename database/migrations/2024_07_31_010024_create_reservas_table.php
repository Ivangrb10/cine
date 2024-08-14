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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('funcion_id'); // Corregido: unsignedBigInteger en lugar de unsingnedBigInteger
            $table->unsignedBigInteger('cliente_id'); // Corregido: unsignedBigInteger en lugar de unsingnedBigInteger
            $table->integer('asientos')->nullable(false);
            $table->timestamps();
    
            // Restricciones de clave foránea
            $table->foreign('funcion_id')->references('id')->on('funciones');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
