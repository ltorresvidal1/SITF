<?php

namespace App\Models\usuariosclientes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuariosclientes extends Model
{
    use HasFactory;

    protected  $fillable =[
        'user_id',
        'cliente_id'
    ];

}
