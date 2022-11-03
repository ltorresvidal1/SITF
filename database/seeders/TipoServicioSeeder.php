<?php

namespace Database\Seeders;

use App\Models\param\param_tiposervicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiposervicio1 = new param_tiposervicio();
        $tiposervicio1->descripcion="Materiales e Insumos";
        $tiposervicio1->created_at="2022-08-16 09:12";
        $tiposervicio1->save();

        $tiposervicio2 = new param_tiposervicio();
        $tiposervicio2->descripcion="Traslados";
        $tiposervicio2->created_at="2022-08-16 09:12";
        $tiposervicio2->save();

        $tiposervicio3 = new param_tiposervicio();
        $tiposervicio3->descripcion="Estancias";
        $tiposervicio3->created_at="2022-08-16 09:12";
        $tiposervicio3->save();

        $tiposervicio4 = new param_tiposervicio();
        $tiposervicio4->descripcion="Honorarios";
        $tiposervicio4->created_at="2022-08-16 09:12";
        $tiposervicio4->save();
             
    }
    
}
