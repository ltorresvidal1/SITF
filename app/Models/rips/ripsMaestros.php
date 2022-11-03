<?php

namespace App\Models\rips;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ripsMaestros extends Model
{
    use HasFactory;

    protected $fillable = [
        'ips_id',
        'user_id',
        'codigo_rips',
        'archivos',
        'periodo',
        'ano',
        'fecharegistro',
        'idestado'
    ];

}
