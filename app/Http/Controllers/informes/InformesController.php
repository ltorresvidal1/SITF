<?php

namespace App\Http\Controllers\informes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InformesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
    
      public function index(){
    
        $user = Auth::user();
       
     
    
           return view('informes.index');
        
    }
}
