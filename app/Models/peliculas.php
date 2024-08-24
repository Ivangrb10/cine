<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    protected $table = 'peliculas';
    protected $primarykey = 'id';
    protected $fillable = ['titulo', 'descripcion','director_id','anio', 'genero_id', 'duracion'];
    public function director()
    {
        return $this->belongsTo(Directores::class);
    }

    public function genero()
    {
        return $this->belongsTo(generos::class);
    }
}
