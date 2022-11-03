<?php

namespace Database\Seeders;

use App\Models\param\param_medidaedad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedidaEdadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $medidaedad1 = new param_medidaedad();
        $medidaedad1->descripcion="Años";
        $medidaedad1->edadminima="1";
        $medidaedad1->edadmaxima="130";
        $medidaedad1->created_at="2022-08-16 09:12";
        $medidaedad1->save();

        $medidaedad2 = new param_medidaedad();
        $medidaedad2->descripcion="Mes";
        $medidaedad2->edadminima="1";
        $medidaedad2->edadmaxima="11";
        $medidaedad2->created_at="2022-08-16 09:12";
        $medidaedad2->save();

        $medidaedad3 = new param_medidaedad();
        $medidaedad3->descripcion="Días";
        $medidaedad3->edadminima="1";
        $medidaedad3->edadmaxima="29";
        $medidaedad3->created_at="2022-08-16 09:12";
        $medidaedad3->save();

  
        
    }
}
