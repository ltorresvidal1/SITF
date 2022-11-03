<?php

namespace App\Http\Controllers\rips;

use Illuminate\Http\Request;
use App\Models\clientes\Clientes;
use App\Http\Controllers\Controller;
use App\Models\rips\ripsMaestros;
use Illuminate\Support\Facades\Auth;
use App\Models\usuariosclientes\Usuariosclientes;

class ripsController extends Controller
{
    //
        
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Clientes $clientes){

    $user = Auth::user();
    $cu=Usuariosclientes::where('cliente_id','=',$clientes->id)->where('user_id','=',$user->id)->first();
   /* $rips=ripsMaestros::where('ips_id','=',$clientes->id)
    ->join('users', 'users.id', '=', 'rips_maestros.user_id')
    ->select('rips_maestros.*','users.nombre as usuario')->paginate();
*/
  ///return DataTables::of($rips);
   // $ur=Usuariosclientes::where('cliente_id','=',$clientes->id)->where('user_id','=',$clientes->id)->first();

    if($cu<>null){
       return view('rips.index',compact('clientes'));
    }else{          
        return redirect()->back();
    }
    
}

public function create(Clientes $clientes) {

   /// $desplegables=Desplegables::where('ventana','estados')->where('estado', '1')->get();
    return view('rips.create',compact('clientes'));

}



}



/***
 * 
 
      @foreach ($rips as $rip)
      <tr>
          <td>{{$rip->codigo_rips}}</td>  
          <td>{{$rip->periodo}}</td>
          <td>{{$rip->ano}}</td>
          <td>{{$rip->usuario}}</td>
          <td>{{$rip->fecharegistro}}</td>
          <td>{{$rip->idestado}}</td>         
                   
          <td>

              <div class="dropdown text-center">
                  <a data-bs-toggle="dropdown" class="text-dark text-decoration-none"><i class="fa fa-ellipsis-v fa-fw fa-lg"></i> </a>
                  <div class="dropdown-menu">
                      <a href="" class="dropdown-item"><i class="fas fa-lg fa-fw me-2 fa-cogs"></i> Validar</a>
                      <a href="" class="dropdown-item"><i class="fas fa-lg fa-fw me-2 fa-cloud-download-alt"></i> Descargar Rips</a>
                      <a href="{{ route('rips.export',[$clientes,$rip->codigo_rips]) }}" class="dropdown-item"><i class="fas fa-lg fa-fw me-2 fa-download"></i> Descargar Errores</a>                     
                  </div>
              </div>

     
          </td>
       </tr>
      
      @endforeach
    
 * 
 */