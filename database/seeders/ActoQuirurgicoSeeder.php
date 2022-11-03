<?php

namespace Database\Seeders;

use App\Models\param\param_actoquirurgico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActoQuirurgicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actoquirurgico1 = new param_actoquirurgico();
        $actoquirurgico1->descripcion="Único o unilateral";
        $actoquirurgico1->created_at="2022-08-16 09:12";
        $actoquirurgico1->save();

        $actoquirurgico2 = new param_actoquirurgico();
        $actoquirurgico2->descripcion="Múltiple o bilateral, misma vía, diferente especialidad";
        $actoquirurgico2->created_at="2022-08-16 09:12";
        $actoquirurgico2->save();


        $actoquirurgico3 = new param_actoquirurgico();
        $actoquirurgico3->descripcion="Múltiple o bilateral, misma vía, igual especialidad";
        $actoquirurgico3->created_at="2022-08-16 09:12";
        $actoquirurgico3->save();

        $actoquirurgico4 = new param_actoquirurgico();
        $actoquirurgico4->descripcion="Múltiple o bilateral, diferente vía, diferente especialidad";
        $actoquirurgico4->created_at="2022-08-16 09:12";
        $actoquirurgico4->save();

        $actoquirurgico5 = new param_actoquirurgico();
        $actoquirurgico5->descripcion="Múltiple o bilateral, diferente vía, igual especialidad";
        $actoquirurgico5->created_at="2022-08-16 09:12";
        $actoquirurgico5->save();

    }
}
