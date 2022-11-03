<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Exports\ErroresValidacionExport;

class ErroresValidacionMultipleSheets implements WithMultipleSheets
{

    use Exportable;

    protected $codigorips;
    
    public function __construct(string $codigorips)
    {
        $this->codigorips = $codigorips;
    }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];
        $archivonombre="";
        for ($archivos = 1; $archivos <= 9; $archivos++) {
            if($archivos == 1){$archivonombre="US";}
            if($archivos == 2){$archivonombre="AF";}
            if($archivos == 3){$archivonombre="AC";}
            if($archivos == 4){$archivonombre="AP";}
            if($archivos == 5){$archivonombre="AU";}
            if($archivos == 6){$archivonombre="AH";}
            if($archivos == 7){$archivonombre="AN";}
            if($archivos == 8){$archivonombre="AM";}
            if($archivos == 9){$archivonombre="AT";}
            if($archivos == 10){$archivonombre="CT";}

            $sheets[] = new ErroresValidacionExport($this->codigorips, $archivos,$archivonombre);
            
        }
       
        return $sheets;
    }
    


}
