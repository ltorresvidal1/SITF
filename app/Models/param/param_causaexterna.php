<?php

namespace App\Models\param;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class param_causaexterna extends Model
{
    use HasFactory;
    protected $table = 'param_causa_externa';
    
    protected $fillable = [
        'descripcion',
        'created_at',
        'updated_at'
    ];
}
