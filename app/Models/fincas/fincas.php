<?php

namespace App\Models\fincas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fincas extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'cliente_id',
        'idestado'
    ];

}
