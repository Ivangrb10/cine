<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generos extends Model
{
    protected $table = 'generos';
    protected $primarykey = 'id';
    protected $fillable = ['nombre', 'descripcion'];
}
