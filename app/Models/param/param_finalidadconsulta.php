<?php

namespace App\Models\param;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class param_finalidadconsulta extends Model
{
    use HasFactory;
    protected $table = 'param_finalidad_consulta';

    protected $fillable = [
        'codigo',
        'descripcion',
        'tipofinalidad',
        'edadminima',
        'edadmaxima',
        'edadminimadias',
        'edadmaximadia',
        'sexo',
        'tipousaurio',
        'created_at',
        'updated_at'
    ];
}
