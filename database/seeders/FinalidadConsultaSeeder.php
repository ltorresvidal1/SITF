<?php

namespace Database\Seeders;

use App\Models\param\param_finalidadconsulta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinalidadConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $finalidadconsulta1 = new param_finalidadconsulta();
        $finalidadconsulta1->codigo="1";
        $finalidadconsulta1->descripcion="Atención del parto (atencion del embarazo y del postparto)";
        $finalidadconsulta1->tipofinalidad="Promoción y detección";
        $finalidadconsulta1->edadminima="409";
        $finalidadconsulta1->edadmaxima="460";
        $finalidadconsulta1->edadminimadias="3286";
        $finalidadconsulta1->edadmaximadias="222265";
        $finalidadconsulta1->sexo="F";
        $finalidadconsulta1->created_at="2022-08-16 09:12";
        $finalidadconsulta1->save();

        $finalidadconsulta2 = new param_finalidadconsulta();
        $finalidadconsulta2->codigo="2";
        $finalidadconsulta2->descripcion="Atención del recién nacido";
        $finalidadconsulta2->tipofinalidad="Promoción y detección";
        $finalidadconsulta2->edadminima="0";
        $finalidadconsulta2->edadmaxima="301";
        $finalidadconsulta2->edadminimadias="1";
        $finalidadconsulta2->edadmaximadias="60";
        $finalidadconsulta2->sexo="A";
        $finalidadconsulta2->created_at="2022-08-16 09:12";
        $finalidadconsulta2->save();
        

        $finalidadconsulta3 = new param_finalidadconsulta();
        $finalidadconsulta3->codigo="3";
        $finalidadconsulta3->descripcion="Atención en planificación familiar";
        $finalidadconsulta3->tipofinalidad="Promoción y detección";
        $finalidadconsulta3->edadminima="409";
        $finalidadconsulta3->edadmaxima="460";
        $finalidadconsulta3->edadminimadias="3286";
        $finalidadconsulta3->edadmaximadias="22265";
        $finalidadconsulta3->sexo="M";
        $finalidadconsulta3->created_at="2022-08-16 09:12";
        $finalidadconsulta3->save();


        $finalidadconsulta32 = new param_finalidadconsulta();
        $finalidadconsulta32->codigo="3";
        $finalidadconsulta32->descripcion="Atención en planificación familiar";
        $finalidadconsulta32->tipofinalidad="Promoción y detección";
        $finalidadconsulta32->edadminima="409";
        $finalidadconsulta32->edadmaxima="599";
        $finalidadconsulta32->edadminimadias="3286";
        $finalidadconsulta32->edadmaximadias="999999999";
        $finalidadconsulta32->sexo="F";
        $finalidadconsulta32->created_at="2022-08-16 09:12";
        $finalidadconsulta32->save();

        
        $finalidadconsulta4= new param_finalidadconsulta();
        $finalidadconsulta4->codigo="4";
        $finalidadconsulta4->descripcion="Detección alteraciones de crecimiento y desarrollo en menor de diez años ";
        $finalidadconsulta4->tipofinalidad="Promoción y detección";
        $finalidadconsulta4->edadminima="301";
        $finalidadconsulta4->edadmaxima="409";
        $finalidadconsulta4->edadminimadias="31";
        $finalidadconsulta4->edadmaximadias="3650";
        $finalidadconsulta4->sexo="A";
        $finalidadconsulta4->created_at="2022-08-16 09:12";
        $finalidadconsulta4->save();

        $finalidadconsulta5 = new param_finalidadconsulta();
        $finalidadconsulta5->codigo="5";
        $finalidadconsulta5->descripcion="Detección alteraciones del  desarrollo en joven";
        $finalidadconsulta5->tipofinalidad="Promoción y detección";
        $finalidadconsulta5->edadminima="410";
        $finalidadconsulta5->edadmaxima="429";
        $finalidadconsulta5->edadminimadias="3651";
        $finalidadconsulta5->edadmaximadias="10950";
        $finalidadconsulta5->sexo="A";
        $finalidadconsulta5->created_at="2022-08-16 09:12";
        $finalidadconsulta5->save();
    
        $finalidadconsulta6 = new param_finalidadconsulta();
        $finalidadconsulta6->codigo="6";
        $finalidadconsulta6->descripcion="Detección alteraciones del embarazo";
        $finalidadconsulta6->tipofinalidad="Promoción y detección";
        $finalidadconsulta6->edadminima="409";
        $finalidadconsulta6->edadmaxima="460";
        $finalidadconsulta6->edadminimadias="3286";
        $finalidadconsulta6->edadmaximadias="22265";
        $finalidadconsulta6->sexo="F";
        $finalidadconsulta6->created_at="2022-08-16 09:12";
        $finalidadconsulta6->save();

        $finalidadconsulta7 = new param_finalidadconsulta();
        $finalidadconsulta7->codigo="7";
        $finalidadconsulta7->descripcion="Detección alteraciones del adulto";
        $finalidadconsulta7->tipofinalidad="Promoción y detección";
        $finalidadconsulta7->edadminima="430";
        $finalidadconsulta7->edadmaxima="599";
        $finalidadconsulta7->edadminimadias="10951";
        $finalidadconsulta7->edadmaximadias="999999999";
        $finalidadconsulta7->sexo="A";
        $finalidadconsulta7->created_at="2022-08-16 09:12";
        $finalidadconsulta7->save();

        $finalidadconsulta8 = new param_finalidadconsulta();
        $finalidadconsulta8->codigo="8";
        $finalidadconsulta8->descripcion="Detección alteraciones de agudeza visual";
        $finalidadconsulta8->tipofinalidad="Promoción y detección";
        $finalidadconsulta8->edadminima="0";
        $finalidadconsulta8->edadmaxima="599";
        $finalidadconsulta8->edadminimadias="1";
        $finalidadconsulta8->edadmaximadias="999999999";
        $finalidadconsulta8->sexo="A";
        $finalidadconsulta8->created_at="2022-08-16 09:12";
        $finalidadconsulta8->save();

        $finalidadconsulta9 = new param_finalidadconsulta();
        $finalidadconsulta9->codigo="9";
        $finalidadconsulta9->descripcion="Detección de enfermedad profesional";
        $finalidadconsulta9->tipofinalidad="Promoción y detección";
        $finalidadconsulta9->edadminima="414";
        $finalidadconsulta9->edadmaxima="599";
        $finalidadconsulta9->edadminimadias="5111";
        $finalidadconsulta9->edadmaximadias="999999999";
        $finalidadconsulta9->sexo="A";
        $finalidadconsulta9->created_at="2022-08-16 09:12";
        $finalidadconsulta9->save();
        
        $finalidadconsulta10 = new param_finalidadconsulta();
        $finalidadconsulta10->codigo="10";
        $finalidadconsulta10->descripcion="No aplica";
        $finalidadconsulta10->tipofinalidad="Resolutivo";
        $finalidadconsulta10->edadminima="0";
        $finalidadconsulta10->edadmaxima="599";
        $finalidadconsulta10->edadminimadias="1";
        $finalidadconsulta10->edadmaximadias="999999999";
        $finalidadconsulta10->sexo="A";
        $finalidadconsulta10->created_at="2022-08-16 09:12";
        $finalidadconsulta10->save();

    }
}
