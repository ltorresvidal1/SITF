<?php

namespace App\Http\Controllers\rips;


use notify;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Mckenziearts\Notify\LaravelNotify;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Exports\ErroresValidacionMultipleSheets;

class erroresvalidacionController extends Controller
{
    //
 
    

    public function exportar_errores(string $rips){
       
      
    return  (new ErroresValidacionMultipleSheets($rips))->download('Errores Validacion Rips '.$rips.'.xlsx');

    
    }
}

