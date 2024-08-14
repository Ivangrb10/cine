<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actores extends Model
{
    protected $table = 'actores';
    protected $primarykey = 'id';
    protected $fillable = ['nombre', 'biografia','fecha_nac'];
}
