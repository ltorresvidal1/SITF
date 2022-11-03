<?php

namespace Database\Seeders;

use App\Models\param\param_tipousuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipousuario1 = new param_tipousuario();
        $tipousuario1->descripcion="Contributivo";
        $tipousuario1->afiliacion="Contributivo";
        $tipousuario1->created_at="2022-08-16 09:12";
        $tipousuario1->save();

        $tipousuario2 = new param_tipousuario();
        $tipousuario2->descripcion="Subsidiado";
        $tipousuario2->afiliacion="Subsidiado";
        $tipousuario2->created_at="2022-08-16 09:12";
        $tipousuario2->save();

        $tipousuario3 = new param_tipousuario();
        $tipousuario3->descripcion="Vinculado";
        $tipousuario3->afiliacion="Vinculado";
        $tipousuario3->created_at="2022-08-16 09:12";
        $tipousuario3->save();

        $tipousuario4 = new param_tipousuario();
        $tipousuario4->descripcion="Particular";
        $tipousuario4->afiliacion="Particular";
        $tipousuario4->created_at="2022-08-16 09:12";
        $tipousuario4->save();

        $tipousuario5 = new param_tipousuario();
        $tipousuario5->descripcion="Otro";
        $tipousuario5->afiliacion="Otro";
        $tipousuario5->created_at="2022-08-16 09:12";
        $tipousuario5->save();

        $tipousuario6 = new param_tipousuario();
        $tipousuario6->descripcion="Víctima del Conflicto Armado - Contributivo";
        $tipousuario6->afiliacion="Contributivo";
        $tipousuario6->created_at="2022-08-16 09:12";
        $tipousuario6->save();

        $tipousuario7 = new param_tipousuario();
        $tipousuario7->descripcion="Víctima del Conflicto Armado - Subsidiado";
        $tipousuario7->afiliacion="Subsidiado";
        $tipousuario7->created_at="2022-08-16 09:12";
        $tipousuario7->save();

        $tipousuario8 = new param_tipousuario();
        $tipousuario8->descripcion="Víctima del Conflicto Armado - Vinculado";
        $tipousuario8->afiliacion="Vinculado";
        $tipousuario8->created_at="2022-08-16 09:12";
        $tipousuario8->save();

        


    }
}
