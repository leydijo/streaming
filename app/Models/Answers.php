<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;

    protected $fillable = [
        'frecuencia_program',
        'streaming_favorito',
        'television_favorito',
        'pelicula',
        'elenco',
        
    ];
}
