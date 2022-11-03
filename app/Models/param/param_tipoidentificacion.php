<?php

namespace App\Models\param;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class param_tipoidentificacion extends Model
{
    use HasFactory;
    protected $table = 'param_tipo_identificacion';
    
    protected $fillable = [
        'tipo',
        'descripcion',
        'longmin',
        'longmax',
        'edadminanos',
        'edadmaxanos',
        'edadmindias',
        'edadmaxdias',
        'idusuario',
        'idprestador',
        'idnacionales',
        'idextranjeros',
        'created_at',
        'updated_at'
    ];
}

