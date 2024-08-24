<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $primaryKey = 'id'; // Corregido a primaryKey
    protected $fillable = ['funcion_id', 'cliente_id', 'asientos'];
    
    public function funciones()
    {
        return $this->belongsTo(funciones::class);
    }

    public function clientes()
    {
        return $this->belongsTo(clientes::class);
    }
}
