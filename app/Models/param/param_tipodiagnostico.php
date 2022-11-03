<?php

namespace App\Models\param;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class param_tipodiagnostico extends Model
{
    use HasFactory;
    protected $table = 'param_tipo_diagnostico';
    
    protected $fillable = [
        'descripcion',
        'created_at',
        'updated_at'
    ];
}
