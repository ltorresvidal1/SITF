<?php

namespace Database\Seeders;

use App\Models\param\param_finalidadprocedimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinalidadProcedimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $finalidadprocedimiento1 = new param_finalidadprocedimiento();
        $finalidadprocedimiento1->descripcion="Diagnóstico";
        $finalidadprocedimiento1->tipofinalidad="Resolutivo";
        $finalidadprocedimiento1->edadminima="0";
        $finalidadprocedimiento1->edadmaxima="599";
        $finalidadprocedimiento1->edadminimadias="1";
        $finalidadprocedimiento1->edadmaximadias="999999999";
        $finalidadprocedimiento1->sexo="A";
        $finalidadprocedimiento1->created_at="2022-08-16 09:12";
        $finalidadprocedimiento1->save();

        $finalidadprocedimiento2 = new param_finalidadprocedimiento();
        $finalidadprocedimiento2->descripcion="Terapeútico";
        $finalidadprocedimiento2->tipofinalidad="Resolutivo";
        $finalidadprocedimiento2->edadminima="0";
        $finalidadprocedimiento2->edadmaxima="599";
        $finalidadprocedimiento2->edadminimadias="1";
        $finalidadprocedimiento2->edadmaximadias="999999999";
        $finalidadprocedimiento2->sexo="A";
        $finalidadprocedimiento2->created_at="2022-08-16 09:12";
        $finalidadprocedimiento2->save();
        

        $finalidadprocedimiento3 = new param_finalidadprocedimiento();
        $finalidadprocedimiento3->descripcion="Protección específica";
        $finalidadprocedimiento3->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento3->edadminima="0";
        $finalidadprocedimiento3->edadmaxima="599";
        $finalidadprocedimiento3->edadminimadias="1";
        $finalidadprocedimiento3->edadmaximadias="999999999";
        $finalidadprocedimiento3->sexo="A";
        $finalidadprocedimiento3->created_at="2022-08-16 09:12";
        $finalidadprocedimiento3->save();

        $finalidadprocedimiento4= new param_finalidadprocedimiento();
        $finalidadprocedimiento4->descripcion="Detección temprana en enfermedad general";
        $finalidadprocedimiento4->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento4->edadminima="0";
        $finalidadprocedimiento4->edadmaxima="599";
        $finalidadprocedimiento4->edadminimadias="1";
        $finalidadprocedimiento4->edadmaximadias="999999999";
        $finalidadprocedimiento4->sexo="A";
        $finalidadprocedimiento4->created_at="2022-08-16 09:12";
        $finalidadprocedimiento4->save();

        $finalidadprocedimiento5 = new param_finalidadprocedimiento();
        $finalidadprocedimiento5->descripcion="Detección temprana en enfermedad profesional";
        $finalidadprocedimiento5->tipofinalidad="Detección enfermedad profesional";
        $finalidadprocedimiento5->edadminima="414";
        $finalidadprocedimiento5->edadmaxima="599";
        $finalidadprocedimiento5->edadminimadias="5111";
        $finalidadprocedimiento5->edadmaximadias="999999999";
        $finalidadprocedimiento5->sexo="A";
        $finalidadprocedimiento5->created_at="2022-08-16 09:12";
        $finalidadprocedimiento5->save();
    
        $finalidadprocedimiento6 = new param_finalidadprocedimiento();
        $finalidadprocedimiento6->descripcion="Promover la salud integral en los niños, niñas y adolescentes";
        $finalidadprocedimiento6->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento6->edadminima="0";
        $finalidadprocedimiento6->edadmaxima="599";
        $finalidadprocedimiento6->edadminimadias="1";
        $finalidadprocedimiento6->edadmaximadias="999999999";
        $finalidadprocedimiento6->sexo="A";
        $finalidadprocedimiento6->created_at="2022-08-16 09:12";
        $finalidadprocedimiento6->save();

        $finalidadprocedimiento7 = new param_finalidadprocedimiento();
        $finalidadprocedimiento7->descripcion="Promover la salud sexual y reproductiva";
        $finalidadprocedimiento7->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento7->edadminima="409";
        $finalidadprocedimiento7->edadmaxima="599";
        $finalidadprocedimiento7->edadminimadias="3286";
        $finalidadprocedimiento7->edadmaximadias="999999999";
        $finalidadprocedimiento7->sexo="A";
        $finalidadprocedimiento7->created_at="2022-08-16 09:12";
        $finalidadprocedimiento7->save();

        $finalidadprocedimiento8 = new param_finalidadprocedimiento();
        $finalidadprocedimiento8->descripcion="Promover la salud en la tercera edad";
        $finalidadprocedimiento8->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento8->edadminima="460";
        $finalidadprocedimiento8->edadmaxima="599";
        $finalidadprocedimiento8->edadminimadias="21901";
        $finalidadprocedimiento8->edadmaximadias="999999999";
        $finalidadprocedimiento8->sexo="A";
        $finalidadprocedimiento8->created_at="2022-08-16 09:12";
        $finalidadprocedimiento8->save();

        $finalidadprocedimiento9 = new param_finalidadprocedimiento();
        $finalidadprocedimiento9->descripcion="Promover la convivencia pacífica con énfasis en el ámbito intrafamiliar";
        $finalidadprocedimiento9->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento9->edadminima="402";
        $finalidadprocedimiento9->edadmaxima="599";
        $finalidadprocedimiento9->edadminimadias="731";
        $finalidadprocedimiento9->edadmaximadias="999999999";
        $finalidadprocedimiento9->sexo="A";
        $finalidadprocedimiento9->created_at="2022-08-16 09:12";
        $finalidadprocedimiento9->save();
        
        $finalidadprocedimiento10 = new param_finalidadprocedimiento();
        $finalidadprocedimiento10->descripcion="Desestimular la exposición al tabaco, al alcohol y a las  sustancias psicoactivas";
        $finalidadprocedimiento10->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento10->edadminima="402";
        $finalidadprocedimiento10->edadmaxima="599";
        $finalidadprocedimiento10->edadminimadias="731";
        $finalidadprocedimiento10->edadmaximadias="999999999";
        $finalidadprocedimiento10->sexo="A";
        $finalidadprocedimiento10->created_at="2022-08-16 09:12";
        $finalidadprocedimiento10->save();

        $finalidadprocedimiento11 = new param_finalidadprocedimiento();
        $finalidadprocedimiento11->descripcion="Promover las condiciones sanitarias del ambiente intradomiciliario";
        $finalidadprocedimiento11->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento11->edadminima="402";
        $finalidadprocedimiento11->edadmaxima="599";
        $finalidadprocedimiento11->edadminimadias="731";
        $finalidadprocedimiento11->edadmaximadias="999999999";
        $finalidadprocedimiento11->sexo="A";
        $finalidadprocedimiento11->created_at="2022-08-16 09:12";
        $finalidadprocedimiento11->save();

        $finalidadprocedimiento12 = new param_finalidadprocedimiento();
        $finalidadprocedimiento12->descripcion="Incrementar el conocimiento de los afiliados en los derechos y deberes, en el uso adecuado de los se";
        $finalidadprocedimiento12->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento12->edadminima="409";
        $finalidadprocedimiento12->edadmaxima="599";
        $finalidadprocedimiento12->edadminimadias="3286";
        $finalidadprocedimiento12->edadmaximadias="999999999";
        $finalidadprocedimiento12->sexo="A";
        $finalidadprocedimiento12->created_at="2022-08-16 09:12";
        $finalidadprocedimiento12->save();

        $finalidadprocedimiento13 = new param_finalidadprocedimiento();
        $finalidadprocedimiento13->descripcion="Promover la lactancia materna";
        $finalidadprocedimiento13->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento13->edadminima="409";
        $finalidadprocedimiento13->edadmaxima="460";
        $finalidadprocedimiento13->edadminimadias="3286";
        $finalidadprocedimiento13->edadmaximadias="22265";
        $finalidadprocedimiento13->sexo="F";
        $finalidadprocedimiento13->created_at="2022-08-16 09:12";
        $finalidadprocedimiento13->save();

        $finalidadprocedimiento14 = new param_finalidadprocedimiento();
        $finalidadprocedimiento14->descripcion="Promoción de la salud enfermedades crónicas";
        $finalidadprocedimiento14->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento14->edadminima="0";
        $finalidadprocedimiento14->edadmaxima="599";
        $finalidadprocedimiento14->edadminimadias="1";
        $finalidadprocedimiento14->edadmaximadias="999999999";
        $finalidadprocedimiento14->sexo="A";
        $finalidadprocedimiento14->created_at="2022-08-16 09:12";
        $finalidadprocedimiento14->save();

        $finalidadprocedimiento15 = new param_finalidadprocedimiento();
        $finalidadprocedimiento15->descripcion="Control o seguimiento de crónicas";
        $finalidadprocedimiento15->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento15->edadminima="0";
        $finalidadprocedimiento15->edadmaxima="599";
        $finalidadprocedimiento15->edadminimadias="1";
        $finalidadprocedimiento15->edadmaximadias="999999999";
        $finalidadprocedimiento15->sexo="A";
        $finalidadprocedimiento15->created_at="2022-08-16 09:12";
        $finalidadprocedimiento15->save();

        $finalidadprocedimiento16 = new param_finalidadprocedimiento();
        $finalidadprocedimiento16->descripcion="Promoción de hábitos alimentarios";
        $finalidadprocedimiento16->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento16->edadminima="307";
        $finalidadprocedimiento16->edadmaxima="599";
        $finalidadprocedimiento16->edadminimadias="213";
        $finalidadprocedimiento16->edadmaximadias="999999999";
        $finalidadprocedimiento16->sexo="A";
        $finalidadprocedimiento16->created_at="2022-08-16 09:12";
        $finalidadprocedimiento16->save();

        $finalidadprocedimiento17 = new param_finalidadprocedimiento();
        $finalidadprocedimiento17->descripcion="Detección de alteraciones en la Gestante";
        $finalidadprocedimiento17->tipofinalidad="Promoción y detección";
        $finalidadprocedimiento17->edadminima="409";
        $finalidadprocedimiento17->edadmaxima="460";
        $finalidadprocedimiento17->edadminimadias="3286";
        $finalidadprocedimiento17->edadmaximadias="22265";
        $finalidadprocedimiento17->sexo="F";
        $finalidadprocedimiento17->created_at="2022-08-16 09:12";
        $finalidadprocedimiento17->save();

  

    }
}
