<?php

namespace App\Http\Controllers\costos;

use Illuminate\Http\Request;
use App\Models\clientes\Clientes;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Models\usuariosclientes\Usuariosclientes;


class CostosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
    
        public function index(Clientes $clientes){
    
            $user = Auth::user();
            $cu=usuariosclientes::where('cliente_id','=',$clientes->id)->where('user_id','=',$user->id)->first();
            //dd();
            if($cu<>null){
                return view('costos.index',compact('clientes'));
            }else{          
                return redirect()->back();
            }
            
        }
   
        public function create(Clientes $clientes) {
       
          return view('costos.create',compact('clientes'));
         // $perfiles= Perfiles::where('id',2)->get();
         // $clientes= Clientes::all();
         // $desplegables=Desplegables::where('ventana','estados')->where('estado', '1')->get();
     
         // return view('sa_usuarios.create',compact('perfiles','clientes','desplegables'));*/
       }
     /*  /*  
        public function store(StoreFincas $request,Clientes $clientes,ToastrFactory $msn) {
       
        
    
         Fincas::create([
            'codigo'=>$request->documento,
            'nombre'=>Str::upper($request->nombre),
            'idestado'=>$request->idestado
          ]);
          /*$IdUsuario = User::latest('id')->first();
          Menuperfiles::create([
            'menu'=>'',
            'perfile_id'=>$request->idperfil,
            'cliente_id'=>$request->idcliente
          ]);
    
          
          Usuariosclientes::create([
            'user_id'=>$IdUsuario->id,
            'cliente_id'=>$request->idcliente
          ]);
    
         $builder = $msn->type('success')->title(' ')->message('Usuario Guardado')->positionClass('toast-bottom-right')->preventDuplicates(true)->timeOut(2000);$builder->flash();    
       
          return redirect()->route('costos.create');
       
        }
 */



}
