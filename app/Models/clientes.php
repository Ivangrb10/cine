<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id'; // Corregido: primaryKey con "K" mayúscula
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'direccion']; // Corregido: apellido en lugar de apellidos
}
