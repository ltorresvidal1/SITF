<?php

namespace Database\Seeders;

use App\Models\param\param_sexo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sexo1 = new param_sexo();
        $sexo1->genero="M";
        $sexo1->descripcion="Hombre";
        $sexo1->created_at="2022-08-16 09:12";
        $sexo1->save();

        $sexo2 = new param_sexo();
        $sexo2->genero="F";
        $sexo2->descripcion="Mujer";
        $sexo2->created_at="2022-08-16 09:12";
        $sexo2->save();

        $sexo3 = new param_sexo();
        $sexo3->genero="I";
        $sexo3->descripcion="Indeterminado";
        $sexo3->created_at="2022-08-16 09:12";
        $sexo3->save();

        
    }
}
