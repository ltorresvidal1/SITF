<?php

namespace App\Http\Controllers\fincas;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\fincas\fincas;
use App\Models\clientes\Clientes;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Http\Requests\fincas\StoreFincas;
use App\Models\desplegables\Desplegables;
use Flasher\SweetAlert\Prime\SweetAlertFactory;
use App\Models\usuariosclientes\Usuariosclientes;
use App\Http\Requests\costosiniciales\StoreCostosiniciales;
use App\Http\Requests\parametrizacion\StoreParametrizacion;

class FincasController extends Controller
{
    
  public function __construct(){
    $this->middleware('auth');
  }

    public function index(Clientes $clientes){

        $user = Auth::user();
        $cu=Usuariosclientes::where('cliente_id','=',$clientes->id)->where('user_id','=',$user->id)->first();
        $fincas=Fincas::where('cliente_id','=',$clientes->id)->paginate();

        if($cu<>null){
            return view('fincas.index',compact('clientes','fincas'));
        }else{          
            return redirect()->back();
        }
        
    }
 
    public function create(Clientes $clientes) {
      $desplegables=Desplegables::where('ventana','estados')->where('estado', '1')->get();
      return view('fincas.create',compact('clientes','desplegables'));

  }
  
    public function store(StoreFincas $request,Clientes $clientes,User $usuario,ToastrFactory $msn) {

      fincas::create([
        'codigo'=>$request->codigo,
        'nombre'=>Str::upper($request->nombre),
        'cliente_id'=>$clientes->id,
        'idestado'=>$request->idestado
      ]);
      
      $builder = $msn->type('success')->title(' ')->message('Finca Guardada')->positionClass('toast-bottom-right')->preventDuplicates(true)->timeOut(2000);$builder->flash();    
     return redirect()->route('fincas.create',compact('clientes'));
    
    }


    public function edit(Clientes $clientes,Fincas $finca){
    
      $desplegables=Desplegables::where('ventana','estados')->where('estado', '1')->get();
      return view('fincas.edit' ,compact('clientes','finca','desplegables'));
  }
  
  public function update(StoreFincas $request,Clientes $clientes,Fincas $finca,ToastrFactory $msn){
    

     $finca->update([
      'codigo'=>$request->codigo,
      'nombre'=>Str::upper($request->nombre),
      'idestado'=>$request->idestado
    ]);

    $builder = $msn->type('warning')->title(' ')->message('Fica Actualizado')->positionClass('toast-bottom-right')->preventDuplicates(true)->timeOut(2000);$builder->flash();     
    $desplegables=Desplegables::where('ventana','estados')->where('estado', '1')->get();
    return view('fincas.edit' ,compact('clientes','finca','desplegables'));
  
  } 
    public function destroy(Clientes $clientes,Fincas $finca,ToastrFactory $msn,SweetAlertFactory $msnerror){

      try{
    $finca->delete();     
    
    $builder = $msn->type('error')->title(' ')->confirmButtonColor('#ffffff')->message('Fica Eliminada')->positionClass('toast-bottom-right')->preventDuplicates(true)->timeOut(2000);$builder->flash();    
    return redirect()->route('fincas.index',compact('clientes'));   
    }catch(Exception $e){
   
      $msnerror->titleText('Finca no se puede Eliminar')->showConfirmButton(false,null,null,null)->addinfo('Finca con costos Iniciales,Parametrizacion o Movimientos');
      

      $fincas=Fincas::where('cliente_id','=',$clientes->id)->paginate();
      return redirect()->route('fincas.index',compact('clientes'));
    }

  }
}
