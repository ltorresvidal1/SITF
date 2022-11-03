<?php

namespace App\Models\param;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class param_tipousuario extends Model
{
    use HasFactory;
    protected $table = 'param_tipo_usuario';
    
    protected $fillable = [
        'descripcion',
        'afiliacion',
        'created_at',
        'updated_at'
    ];
}
