<?php

namespace App\Http\Controllers\costosiniciales;

use Illuminate\Http\Request;
use App\Models\fincas\fincas;
use App\Models\clientes\Clientes;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Http\Requests\fincas\StoreFincas;
use App\Models\costosiniciales\Costosiniciales;
use App\Models\usuariosclientes\Usuariosclientes;
use App\Http\Requests\costosiniciales\StoreCostosiniciales;

class CostosInicialesCotroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
    
        public function index(Clientes $clientes){
    
            $user = Auth::user();
            $cu=Usuariosclientes::where('cliente_id','=',$clientes->id)->where('user_id','=',$user->id)->first();
            $fincas=Fincas::where('fincas.cliente_id','=',$clientes->id)
            ->join('costosiniciales', 'costosiniciales.finca_id', '=', 'fincas.id')
            ->select('fincas.id','fincas.codigo','fincas.nombre')->groupBy('fincas.id','fincas.codigo','fincas.nombre')->paginate();
            //Costosiniciales::where('cliente_id','=',$clientes->id)->paginate();
          
            if($cu<>null){
                return view('costosiniciales.index',compact('clientes','fincas'));
            }else{          
                return redirect()->back();
            }
            
        }
     
        public function create(Clientes $clientes) {
      
          $fincas=Fincas::where('cliente_id','=',$clientes->id)->
          whereNotExists(function ($query) {
            $query->select(Costosiniciales::raw(1))
                  ->from('costosiniciales')
                  ->whereColumn('fincas.id', 'costosiniciales.finca_id');
        })->paginate();
          return view('costosiniciales.create',compact('clientes','fincas'));
    
      }
      
        public function store(StoreCostosiniciales $costosiniciales,Clientes $clientes,ToastrFactory $msn) {

          $tipos=['NV','VP','VS','CH','CM','HL','ML','MC','TO','TR','G_VP','G_VS','G_NV'];
          $kilos=[
            $costosiniciales->csk,
            $costosiniciales->cpk,
            $costosiniciales->nvk,
            $costosiniciales->chk,
            $costosiniciales->hlk,
            $costosiniciales->cmk,
            $costosiniciales->mlk,
            $costosiniciales->mck,
            $costosiniciales->tk,
            $costosiniciales->rk,
            '0','0','0'];
          $valor=[ $costosiniciales->csvk,
          $costosiniciales->cpvk,
          $costosiniciales->nvvk,
          $costosiniciales->chvk,
          $costosiniciales->hlvk,
          $costosiniciales->cmvk,
          $costosiniciales->mlvk,
          $costosiniciales->mcvk,
          $costosiniciales->tvk,
          $costosiniciales->rvk,
          $costosiniciales->nvgv,
          $costosiniciales->vsgv,
          $costosiniciales->vpgv,
          ];

          
          $count = count($tipos);

          for ($i=0;$i<$count;$i++){
             Costosiniciales::create([
              'finca_id'=>$costosiniciales->idfinca,
              'cliente_id'=>$clientes->id,
              'estadoProduccion'=>$tipos[$i],
              'kilos'=>$kilos[$i],
              'valor'=>$valor[$i]
            ]);
          }
             
         $builder = $msn->type('success')->title(' ')->message('Costos Inciales Guardado')->positionClass('toast-bottom-right')->preventDuplicates(true)->timeOut(2000);$builder->flash();    
        
         return redirect()->route('costosiniciales.create',compact('clientes'));
       
        }
     /*
        public function edit(User $usuario){
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
    */
    
    
}
