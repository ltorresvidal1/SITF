<?php

namespace App\Models\param;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class param_ambitoprocedimiento extends Model
{
    use HasFactory;

    protected $table = 'param_ambito_procedimiento';
    
    protected $fillable = [
        'descripcion',
        'observacion',
        'created_at',
        'updated_at'
    ];
}
