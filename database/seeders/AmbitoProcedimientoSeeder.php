<?php

namespace Database\Seeders;

use App\Models\param\param_ambitoprocedimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmbitoProcedimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ambitoprocedimiento1 = new param_ambitoprocedimiento();
        $ambitoprocedimiento1->descripcion="Ambulatorio";
        $ambitoprocedimiento1->observacion="Consulta ambulatoria";
        $ambitoprocedimiento1->created_at="2022-08-16 09:12";
        $ambitoprocedimiento1->save();

        $ambitoprocedimiento2 = new param_ambitoprocedimiento();
        $ambitoprocedimiento2->descripcion="Hospitalario";
        $ambitoprocedimiento2->observacion="Paciente hospitalizado";
        $ambitoprocedimiento2->created_at="2022-08-16 09:12";
        $ambitoprocedimiento2->save();

        $ambitoprocedimiento3 = new param_ambitoprocedimiento();
        $ambitoprocedimiento3->descripcion="En Urgencias";
        $ambitoprocedimiento3->observacion="Paciente con urgencias de observacion";
        $ambitoprocedimiento3->created_at="2022-08-16 09:12";
        $ambitoprocedimiento3->save();

        


    }
}
