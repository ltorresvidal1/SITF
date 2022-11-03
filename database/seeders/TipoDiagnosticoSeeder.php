<?php

namespace Database\Seeders;

use App\Models\param\param_tipodiagnostico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDiagnosticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipodiagnostico1 = new param_tipodiagnostico();
        $tipodiagnostico1->descripcion="Impresión diagnóstica";
        $tipodiagnostico1->created_at="2022-08-16 09:12";
        $tipodiagnostico1->save();

        $tipodiagnostico2 = new param_tipodiagnostico();
        $tipodiagnostico2->descripcion="Confirmado nuevo";
        $tipodiagnostico2->created_at="2022-08-16 09:12";
        $tipodiagnostico2->save();

        $tipodiagnostico3 = new param_tipodiagnostico();
        $tipodiagnostico3->descripcion="Confirmado repetido";
        $tipodiagnostico3->created_at="2022-08-16 09:12";
        $tipodiagnostico3->save();

    }
}
