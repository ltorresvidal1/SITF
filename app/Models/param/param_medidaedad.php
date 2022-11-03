<?php

namespace App\Models\param;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class param_medidaedad extends Model
{
    use HasFactory;

    protected $table = 'param_medida_edad';

    protected $fillable = [
        'descripcion',
        'edadminima',
        'edadmaxima',
        'created_at',
        'updated_at'
    ];
}
