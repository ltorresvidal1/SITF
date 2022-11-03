<?php

namespace App\Http\Controllers\clientes;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\clientes\Clientes;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Models\desplegables\Desplegables;
use App\Http\Requests\clientes\StoreClientes;

class ClientesController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
    public function index() {
      
        $clientes=Clientes::paginate();
        return view('clientes.index',compact('clientes'));

  }

  public function create() {
    $desplegables=Desplegables::where('ventana','estados')->where('estado', '1')->get();
    return view('clientes.create',compact('desplegables'));
  }
  
  public function store(StoreClientes $request) {
  
    Clientes::create([
      'nit'=>$request->nit,
      'nombre'=>Str::upper($request->nombre),
      'direccion'=>Str::upper($request->direccion),
      'telefono'=>$request->telefono,
      'correo'=>$request->correo,
      'logo'=>$request->logo,
      'fechainicial'=>$request->fechainicial,
      'fechafinal'=>$request->fechafinal,
      'ruta'=>$request->ruta,
      'idestado'=>$request->idestado
    ]);

         
     


    return redirect()->route('clientes.create');
   
  }



  public function show(Clientes $cliente){
    
    return view('clientes.show',compact('cliente'));
}

public function edit(Clientes $cliente){
    $desplegables=Desplegables::where('ventana','estados')->where('estado', '1')->get();
    return view('clientes.edit',compact('cliente','desplegables'));
}
public function update(StoreClientes $request,Clientes $cliente){
//,ToastrFactory $msn
   $cliente->update($request->all());
   notify()->success('Laravel Notify is awesome!');
//   $builder = $msn->type('warning')->title(' ')->message('Finca Actualizada')->positionClass('toast-bottom-right')->preventDuplicates(true)->timeOut(2000);$builder->flash();     
   return redirect()->route('clientes.edit',compact('cliente'));

}
  public function destroy(Clientes $cliente){
  $cliente->delete();     
  //,ToastrFactory $msn
  //$builder = $msn->type('error')->title(' ')->message('cliente Eliminado')->positionClass('toast-bottom-right')->preventDuplicates(true)->timeOut(2000);$builder->flash();    
  return redirect()->route('clientes.index');
    
  }

}
