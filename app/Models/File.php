<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'codigounico',
        'nombre',
        'ruta',
        'idestado',
    ];
}
