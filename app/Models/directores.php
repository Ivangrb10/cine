<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directores extends Model
{
    protected $table = 'directores';
    protected $primarykey = 'id';
    protected $fillable = ['nombre', 'biografia', 'fecha_nac'];
}
