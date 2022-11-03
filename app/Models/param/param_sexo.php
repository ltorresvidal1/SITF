<?php

namespace App\Models\param;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class param_sexo extends Model
{
    use HasFactory;

    protected $table = 'param_sexo';
    
    protected $fillable = [
        'genero',
        'descripcion',
        'created_at',
        'updated_at'
    ];
}
