<?php

namespace App\Http\Controllers;

use datatables;
use Illuminate\Http\Request;
use App\Models\rips\ripsMaestros;
use App\Models\clientes\Clientes;

class DatatableController extends Controller
{


    public function ripsmaestro(Clientes $clientes){

        $rips=ripsMaestros::where('ips_id','=',$clientes->id)
        ->join('users', 'users.id', '=', 'rips_maestros.user_id')
        ->select('rips_maestros.*','users.nombre as usuario')->get();
        //return datatables()->collection($rips)->toJson();
        
        
        return datatables()->of($rips)->addColumn('action',function ($rips){
            $acciones='<div class="dropdown text-center">';
            $acciones.='<a data-bs-toggle="dropdown" class="text-dark text-decoration-none"><i class="fa fa-ellipsis-v fa-fw fa-lg"></i> </a>';
            $acciones.='<div class="dropdown-menu">';
            $acciones.='<a class="dropdown-item"><i class="fas fa-lg fa-fw me-2 fa-cogs"></i> Validar</a>';
            $acciones.='<a class="dropdown-item"><i class="fas fa-lg fa-fw me-2 fa-cloud-download-alt"></i> Descargar Rips</a>';
            $acciones.="<a onclick='descargar_errores(".$rips->codigo_rips.")' class='dropdown-item'><i class='fas fa-lg fa-fw me-2 fa-download'></i> Descargar Errores</a>";
            $acciones.='</div>';
            $acciones.='</div>';
            return $acciones;
        })->rawColumns(['action'])->make(true);
    
/*
         class='{{route(''rips.export',[".$rips->codigo_rips.",".$rips->codigo_rips."])}}'
{{route('rips.export',[$clientes,$rip->codigo_rips])}}
            href='{{route(rips.export,".$rips->codigo_rips.")}}
            {{ route('rips.export',[$clientes,$rip->codigo_rips]) }}
            <a href="{{ route('rips.export',[$clientes,$rip->codigo_rips]) }}" class="dropdown-item"><i class="fas fa-lg fa-fw me-2 fa-download"></i> Descargar Errores</a>                     
   */

    }
}
