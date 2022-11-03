<?php

namespace Database\Seeders;

use App\Models\param\param_estructura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstructuraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estructura1 = new param_estructura();
        $estructura1->acronimo="US";
        $estructura1->nombre="Usuarios";
        $estructura1->tabla="Rips_Usuarios";
        $estructura1->created_at="2022-08-16 09:12";
        $estructura1->save();

        $estructura2 = new param_estructura();
        $estructura2->acronimo="AF";
        $estructura2->nombre="Facturas";
        $estructura2->tabla="Rips_Facturas";
        $estructura2->created_at="2022-08-16 09:12";
        $estructura2->save();

        $estructura3 = new param_estructura();
        $estructura3->acronimo="AC";
        $estructura3->nombre="Consultas";
        $estructura3->tabla="Rips_Consultas";
        $estructura3->created_at="2022-08-16 09:12";
        $estructura3->save();

        $estructura4 = new param_estructura();
        $estructura4->acronimo="AP";
        $estructura1->nombre="Procedimientos";
        $estructura4->tabla="Rips_Procedimientos";
        $estructura4->created_at="2022-08-16 09:12";
        $estructura4->save();

        $estructura5 = new param_estructura();
        $estructura5->acronimo="AU";
        $estructura5->nombre="Urgencias";
        $estructura5->tabla="Rips_Urgencias";
        $estructura5->created_at="2022-08-16 09:12";
        $estructura5->save();

        $estructura6 = new param_estructura();
        $estructura6->acronimo="AH";
        $estructura6->nombre="Hospitalizaciones";
        $estructura6->tabla="Rips_Hospitalizaciones";
        $estructura6->created_at="2022-08-16 09:12";
        $estructura6->save();

        $estructura7 = new param_estructura();
        $estructura7->acronimo="AN";
        $estructura7->nombre="Recien Nacidos";
        $estructura7->tabla="Rips_RecienNacidos";
        $estructura7->created_at="2022-08-16 09:12";
        $estructura7->save();

        $estructura8 = new param_estructura();
        $estructura8->acronimo="AM";
        $estructura8->nombre="Medicamentos";
        $estructura8->tabla="Rips_Medicamentos";
        $estructura8->created_at="2022-08-16 09:12";
        $estructura8->save();

        $estructura9 = new param_estructura();
        $estructura9->acronimo="AT";
        $estructura9->nombre="Otros Servicios";
        $estructura9->tabla="Rips_OtrosServicios";
        $estructura9->created_at="2022-08-16 09:12";
        $estructura9->save();
        
        
        

    }
}
