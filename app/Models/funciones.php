<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funciones extends Model
{
    protected $table = 'funciones';
    protected $primaryKey = 'id';
    protected $fillable = ['pelicula_id', 'sala_id', 'fecha', 'hora'];

    public function peliculas()
    {
        return $this->belongsTo(Peliculas::class);
    }

    public function sala()
    {
        return $this->belongsTo(Salas::class);
    }
}

