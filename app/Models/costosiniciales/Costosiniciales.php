<?php

namespace App\Models\costosiniciales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costosiniciales extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'finca_id',
        'cliente_id',
        'estadoProduccion',
        'kilos',
        'valor',
    ];
}
