<?php

namespace App\Models\clientes;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;


    protected $fillable = [
        'nit',
        'nombre',
        'direccion',
        'telefono',
        'correo',
        'ruta',
        'logo',
        'fechainicial',
        'fechafinal',
        'idestado'
    ];


    public function user(){
        return $this->belongsTo(User::class);
     }

}
