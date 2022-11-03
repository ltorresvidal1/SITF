<?php


namespace App\Exports;

use App\Models\rips\erroresvalidacion;
use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\BeforeWriting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;


class ErroresValidacionExport implements FromQuery,WithTitle,ShouldAutoSize,WithHeadings,WithStyles,WithEvents
{
    private $archivo;
    private $codigorips;
    private $archivonombre;

    use Exportable, RegistersEventListeners;
    /**
    * @return \Illuminate\Support\Collection
    */

     public function __construct(string $codigorips,int $archivo,string $archivonombre)
     {
        $this->codigorips=$codigorips;
        $this->archivo=$archivo;
        $this->archivonombre=$archivonombre;
       
    }


    public function query()
    { 
        return erroresvalidacion::query()->where('codigo_rips','=',$this->codigorips)->wherearchivo($this->archivo)->orderBy('id_registro', 'asc')
        ->select('id_registro','codigoerror','descripcionerror','nombrecampo');
    }

    public function title(): string {

       
            return 'Errores Archivo - ' .$this->archivonombre;
       
    }

    public function headings(): array
    {
        return [
            'Linea',
            'Codigo Error',
            'Descripcion Error',
            'Nombre Campo',
        ];
    }
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
    }

    

   

}

