<?php

namespace App\Http\Controllers\sa_usuarios;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use App\Models\clientes\Clientes;
use App\Models\perfiles\Perfiles;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Models\desplegables\Desplegables;
use App\Models\Menuperfiles\Menuperfiles;
use App\Http\Requests\Usuarios\StoreUsuarios;
use App\Models\usuariosclientes\Usuariosclientes;




class Sa_usuariosController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
    public function index() {
 
      $usuarios=User::where('users.id','<>',1)
      ->join('usuariosclientes', 'usuariosclientes.user_id', '=', 'users.id')
      ->join('clientes', 'clientes.id', '=', 'usuariosclientes.cliente_id')
      ->select('users.*','clientes.nombre as cliente')->paginate();
      
      return view('sa_usuarios.index',compact('usuarios'));
    }
  
    public function create() {
      $perfiles= Perfiles::where('id','<>',1)->get();
      $clientes= Clientes::all();
      $desplegables=Desplegables::where('ventana','estados')->where('estado', '1')->get();
 
      return view('sa_usuarios.create',compact('perfiles','clientes','desplegables'));
  }
  
    public function store(StoreUsuarios $request,ToastrFactory $msn) {
   
      User::create([
        'documento'=>$request->documento,
        'nombre'=>Str::upper($request->nombre),
        'usuario'=>Str::upper($request->usuario),
        'password'=>Hash::make($request->password),
        'perfile_id'=>$request->idperfil,
        'idestado'=>$request->idestado
      ]);
      $IdUsuario = User::latest('id')->first();
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
    
     return redirect()->route('sa_usuarios.create');
   
    }

    public function edit(User $usuario){

     // dd($usuario);
      $perfiles= Perfiles::where('id',2)->get();
      $clientes= Clientes::all();
      $usuariosclientes=Usuariosclientes::where('user_id',$usuario->id)->first();
      $desplegables=Desplegables::where('ventana','estados')->where('estado', '1')->get();
    
      return view('sa_usuarios.edit',compact('usuario','perfiles','clientes','desplegables','usuariosclientes'));
  }
  
  public function update(StoreUsuarios $request,User $usuario,ToastrFactory $msn){
    
     $usuario->update([
      'documento'=>$request->documento,
      'nombre'=>Str::upper($request->nombre),
      'usuario'=>Str::upper($request->usuario),
      'perfile_id'=>$request->idperfil,
      'idestado'=>$request->idestado
    ]);

    $usuario->usuarioclientes()->update([
      'cliente_id'=>$request->idcliente
    ]);

    $builder = $msn->type('warning')->title(' ')->message('Usuario Actualizado')->positionClass('toast-bottom-right')->preventDuplicates(true)->timeOut(2000);$builder->flash();     
    return redirect()->route('sa_usuarios.edit',compact('usuario'));
  
  }
    public function destroy(User $usuario,ToastrFactory $msn){
    $usuario->usuarioclientes()->delete();     
    $usuario->delete();     
    
    $builder = $msn->type('error')->title(' ')->message('Usuario Eliminado')->positionClass('toast-bottom-right')->preventDuplicates(true)->timeOut(2000);$builder->flash();    
    return redirect()->route('sa_usuarios.index');
      
    }

}
