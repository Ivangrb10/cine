<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salas extends Model
{
    protected $table = 'salas';
    protected $primarykey = 'id';
    protected $fillable = ['nombre', 'capacidad'];
}
