<?php

namespace App\Http\Controllers\cargarrips;

use DateTime;
use Illuminate\Http\Request;
use App\Models\clientes\Clientes;
use App\Models\rips\ripsMaestros;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Flasher\Toastr\Prime\ToastrFactory;
use Flasher\SweetAlert\Prime\SweetAlertFactory;
use App\Models\usuariosclientes\Usuariosclientes;
use App\Jobs\validacionrips;
class cargarripsController extends Controller
{
      
  public function __construct(){
    $this->middleware('auth');
  }

    public function store(Request $request){
    


     
        $user = Auth::user();
        $cu=Usuariosclientes::where('user_id','=',$user->id)->first();
        $carpeta =  $request->temporal;
        $clientes=Clientes::where('id','=',$cu->cliente_id)->first();
      
       $listaarchivos=[];
       $errores=[];
       $aminimo=0;


    
        foreach ($request->file('file') as $key => $value) {

           $tipo=substr($value->getClientOriginalName(), 0,2);
         
          if($tipo=="CT"){ $errores[] = "CT_SI"; $aminimo=$aminimo+10; $listaarchivos[] ="CT";}
          if($tipo=="AF"){ $errores[] = "AF_SI"; $aminimo=$aminimo+10; $listaarchivos[] ="AF"; } 
          if($tipo=="US"){ $errores[] = "US_SI"; $aminimo=$aminimo+10; $listaarchivos[] ="US";}
          if($tipo=="AC"){ $errores[] = "AC_SI"; $aminimo=$aminimo+1; $listaarchivos[] ="AC"; }
          if($tipo=="AP"){ $errores[] = "AP_SI"; $aminimo=$aminimo+1; $listaarchivos[] ="AP"; }
          if($tipo=="AU"){ $errores[] = "AU_SI"; $aminimo=$aminimo+1; $listaarchivos[] ="AU";}
          if($tipo=="AH"){ $errores[] = "AH_SI"; $aminimo=$aminimo+1; $listaarchivos[] ="AH"; }
          if($tipo=="AN"){ $errores[] = "AN_SI"; $aminimo=$aminimo+1; $listaarchivos[] ="AN"; }
          if($tipo=="AM"){ $errores[] = "AM_SI"; $aminimo=$aminimo+1; $listaarchivos[] ="AM"; }
          if($tipo=="AT"){ $errores[] = "AT_SI"; $aminimo=$aminimo+1; $listaarchivos[] ="AT";}
        }


        if($aminimo>=31){


        foreach ($request->file('file') as $key => $value) {


          $tipo=substr($value->getClientOriginalName(), 0,2);
          $value->storeAs('/uploads/rips/'. $clientes->id.'/'.$carpeta.'/',$value->getClientOriginalName());
          $file = storage_path('app/uploads/rips/'. $clientes->id.'/'.$carpeta.'/'.$value->getClientOriginalName());
  
          if($tipo=="US"){
             $query = 'call "CopiaRips_US"('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');';
            // DB::getPdo()->exec($query);     
            return response()->json($query);
           //  DB::select('call CopiaRips_US('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');');
          }
        /* 
        if($tipo=="AC"){
            $query = 'call "CopiaRips_AC"('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');';
            DB::getPdo()->exec($query);     
          }
*/
        }

       ripsMaestros::create([
          'ips_id'=>$clientes->id,
          'user_id'=>$user->id,
          'codigo_rips'=>$carpeta ,
          'archivos'=>'ac,cd',
          'periodo'=>'08',
          'ano'=>'2022',
          'fecharegistro'=>now(),
          'idestado'=>'1'
        ]);
   
    //    validacionrips::dispatch($carpeta);
  
        }
      
   
          return response()->json($errores);



    }
}




      /*
          if($tipo=="CT"){
            $query = 'call "CopiaRips_CT"('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');';
             DB::getPdo()->exec($query);     
          }
          if($tipo=="AF"){
            $query = 'call "CopiaRips_AF"('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');';
             DB::getPdo()->exec($query);     
          }
        if($tipo=="AP"){
            $query = 'call "CopiaRips_AP"('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');';
            DB::getPdo()->exec($query);     
          }
          if($tipo=="AU"){
            $query = 'call "CopiaRips_AU"('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');';
            DB::getPdo()->exec($query);     
          }
          if($tipo=="AH"){
            $query = 'call "CopiaRips_AH"('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');';
            DB::getPdo()->exec($query);     
          }
          if($tipo=="AN"){
            $query = 'call "CopiaRips_AN"('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');';
            DB::getPdo()->exec($query);     
          }
          if($tipo=="AM"){
            $query = 'call "CopiaRips_AH"('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');';
            DB::getPdo()->exec($query);     
          }
          if($tipo=="AT"){
            $query = 'call "CopiaRips_AN"('."'".$file."','".$carpeta."'".','.$clientes->id.','.$user->id.');';
            DB::getPdo()->exec($query);     
          }
*/




/*
select * from jobs
select codigoerror,descripcionerror from erroresvalidacion where archivo=3
group by codigoerror,descripcionerror order by codigoerror
 
 
 delete from erroresvalidacion;
  delete from rips_usuarios;
   delete from rips_consultas;
    delete from rips_maestros;*/


     
      //  return redirect()->route('rips.index');
        // return redirect()->intend('/principal')->with('success', 'Uploded successfully');
      //  return redirect()->back();
       // $builder = $msn->type('success')->title(' ')->message('Finca Guardada')->positionClass('toast-bottom-right')->preventDuplicates(true)->timeOut(2000);$builder->flash();    
      // return redirect()->route('rips.index');
        
       //return response()->json($request->temporal);

     //   foreach ($request->images as $image) {
       //   return response()->json("hola");
     /// }
     //   return response()->json($request);
    

       /// $archivos =  $request->file('file');
        //$completeFilename =  $archivos->getClientOriginalName();   
        /*  $fileNameOnly = pathinfo($completeFilename,PATHINFO_FILENAME);
        $extension= $archivos->getClientOriginalExtension();        
        $documents=str_replace(' ','', $fileNameOnly).'.'.$extension;
     $ldate = new DateTime('now');
        $codigounico=time();
        $co=now()->addMinutes(5);
       $archivos->storeAs('/uploads/rips/'. $cu->cliente_id.'/',$documents);
       
        $file = storage_path('app/uploads/rips/'. $cu->cliente_id.'/'.$documents);
        $tipo= substr($completeFilename, 0,2);


        if($tipo=="US"){
          $query = 'call "CopiaRips_US"('."'".$file."'".', 1, 1);';
          DB::getPdo()->exec($query);
          //return response()->json(['archivos'=>$query]);
        }
      */
   //  return response()->json(['archivos'=>$completeFilename]);
       // return response()->json($request);
       // return response()->json(now());
   /// $query = "copy public.rips_usuarios  (tipoidentificac, numeroidentificacion, administradora, tipousuario, primerapellido, segundoapellido, primernombre, segundonombre, edad, unidadedad, sexo, departamento, municipio, zona) FROM '$file' DELIMITER ',' ENCODING 'UTF8';";
      
   
    //$archivos->move(public_path('uploads/rips/'. $cu->cliente_id.'/'),$documents);
 
  
      
       
    //Excel::import(new RipsUsuarios, $request->file);
        //Excel::import(new RipsUsuarios,  $request->file('file'));
        //Excel::import(new RipsUsuarios, $request->file('file')->store('temp'));
        
        //Excel::import(new RipsUsuarios,'uploads/rips/'. $cu->cliente_id.'/'.$documents);


      //    $this->output->title('Starting import');
      //   Excel::import(new RipsUsuarios, $request->file);
       //  
         // return response()->json(['archivos'=>'xxx']);
            //
         //   return back()->with('success', 'Import successfully!');
          //$this->output->success('Import successful');
       
        /*
          LoadFile::file('uploads/rips/2/US001359.txt', $local = true)
          ->into('rips_usuarios')
          ->columns(['forename', 'surname', 'employee_id'])
          ->fieldsTerminatedBy(',')
          ->fieldsEscapedBy('\\\\')
          ->fieldsEnclosedBy('"')
      
          ->fields(',', '\\\\', '"')
          ->load();
          */
        //  RipsUsuarios::loadFile('/path/to/users.csv', $local = true);
         /* LoadFile::file('/uploads/rips/2/US001359.txt', $local = true)
            ->into('rips_usuarios')
            ->columns(['ips_id', 'id_registro', 'tipoidentificac'])
            ->load();
    */
   