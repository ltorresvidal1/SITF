<?php

namespace App\Models\rips;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use EllGreen\LaravelLoadFile\Laravel\Traits\LoadsFiles;

class ripsUsuarios extends Model
{
    use LoadsFiles;


    protected $fillable = [
        'ips_id',
        'id_registro',
        'tipoidentificac',
        'numeroidentificacion',
        'administradora',
        'tipousuario',
        'primerapellido',
        'segundoapellido',
        'primernombre',
        'edad',
        'unidadedad',
        'sexo',
        'departamento',
        'municipio',
        'zona',
        'edadDias'
    ];



}
