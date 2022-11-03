<?php

namespace Database\Seeders;

use App\Models\perfiles\Perfiles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfil1 = new Perfiles();
        $perfil1->nombre="SUPER_ADMINISTRADOR";
        $perfil1->sa_administrador="1";
        $perfil1->idestado="1";
        $perfil1->created_at="2022-08-16 09:12";
        $perfil1->save();

        $perfil2 = new Perfiles();
        $perfil2->nombre="ADMINISTRADOR S.S";
        $perfil2->sa_administrador="0";
        $perfil2->idestado="1";
        $perfil2->created_at="2022-08-16 09:12";
        $perfil2->save();

        $perfil3 = new Perfiles();
        $perfil3->nombre="PRESTADOR";
        $perfil3->sa_administrador="0";
        $perfil3->idestado="1";
        $perfil3->created_at="2022-08-16 09:12";
        $perfil3->save();
    }
}
