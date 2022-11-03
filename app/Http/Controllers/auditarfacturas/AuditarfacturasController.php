<?php

namespace App\Http\Controllers\auditarfacturas;

use Illuminate\Http\Request;
use App\Models\clientes\Clientes;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\usuariosclientes\Usuariosclientes;

class AuditarfacturasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
    
      public function index(){
    
        $user = Auth::user();
       
     
    
           return view('auditarfacturas.index');
        
    }
    
    public function create() {
    
       /// $desplegables=Desplegables::where('ventana','estados')->where('estado', '1')->get();
        return view('auditarfacturas.create');
    
    }
}
