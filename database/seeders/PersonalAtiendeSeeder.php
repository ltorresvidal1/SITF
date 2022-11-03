<?php

namespace Database\Seeders;

use App\Models\param\param_personalatiende;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalAtiendeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personalatiende1 = new param_personalatiende();
        $personalatiende1->descripcion="Medico Especialista";
        $personalatiende1->created_at="2022-08-16 09:12";
        $personalatiende1->save();

        $personalatiende2 = new param_personalatiende();
        $personalatiende2->descripcion="Medico General";
        $personalatiende2->created_at="2022-08-16 09:12";
        $personalatiende2->save();

        $personalatiende3 = new param_personalatiende();
        $personalatiende3->descripcion="Enfermera";
        $personalatiende3->created_at="2022-08-16 09:12";
        $personalatiende3->save();

        $personalatiende4 = new param_personalatiende();
        $personalatiende4->descripcion="Auxiliar de enfermeria";
        $personalatiende4->created_at="2022-08-16 09:12";
        $personalatiende4->save();

        $personalatiende5 = new param_personalatiende();
        $personalatiende5->descripcion="Otro";
        $personalatiende5->created_at="2022-08-16 09:12";
        $personalatiende5->save();










    }
}
