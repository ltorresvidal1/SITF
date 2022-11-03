<?php

namespace App\Http\Controllers\principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
        public function index() {
          notify()->success('Bienvenido');
            return view('principal');
    
      }
}
