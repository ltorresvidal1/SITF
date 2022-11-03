<?php

namespace App\Http\Controllers\usuarios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Usuarios\StoreUsuarios;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosController extends Controller
{
    
  public function index() {
      return view('usuarios.index');
  }

  public function create() {
    return view('usuarios.create');
}

  public function store(StoreUsuarios $request) {
  
  

  User::create([
      'documento'=>$request->documento,
      'nombre'=>Str::upper($request->nombre),
      'usuario'=>Str::upper($request->usuario),
      'password'=>Hash::make($request->password),
      'cliente_id'=>$request->idcliente,
      'perfile_id'=>$request->idperfil,
      'idestado'=>$request->idestado
    ]);

    return redirect()->route('usuarios.create');

  }



  
}
