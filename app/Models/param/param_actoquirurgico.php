<?php

namespace App\Models\param;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class param_actoquirurgico extends Model
{
    use HasFactory;

    protected $table = 'param_acto_quirurgico';
    
    protected $fillable = [
        'descripcion',
        'created_at',
        'updated_at'
    ];
}
