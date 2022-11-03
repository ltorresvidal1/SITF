<?php

namespace Database\Seeders;

use App\Models\param\param_causaexterna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CausaExternaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $causaexterna1 = new param_causaexterna();
        $causaexterna1->descripcion="Accidente de trabajo";
        $causaexterna1->created_at="2022-08-16 09:12";
        $causaexterna1->save();

        $causaexterna2 = new param_causaexterna();
        $causaexterna2->descripcion="Accidente de tránsito";
        $causaexterna2->created_at="2022-08-16 09:12";
        $causaexterna2->save();

        $causaexterna3 = new param_causaexterna();
        $causaexterna3->descripcion="Accidente rábico";
        $causaexterna3->created_at="2022-08-16 09:12";
        $causaexterna3->save();

        $causaexterna4 = new param_causaexterna();
        $causaexterna4->descripcion="Accidente ofídico";
        $causaexterna4->created_at="2022-08-16 09:12";
        $causaexterna4->save();

        $causaexterna5 = new param_causaexterna();
        $causaexterna5->descripcion="Otro tipo de accidente";
        $causaexterna5->created_at="2022-08-16 09:12";
        $causaexterna5->save();

        $causaexterna6 = new param_causaexterna();
        $causaexterna6->descripcion="Evento catastrófico";
        $causaexterna6->created_at="2022-08-16 09:12";
        $causaexterna6->save();

        $causaexterna7 = new param_causaexterna();
        $causaexterna7->descripcion="Lesión por agresión";
        $causaexterna7->created_at="2022-08-16 09:12";
        $causaexterna7->save();

        $causaexterna8 = new param_causaexterna();
        $causaexterna8->descripcion="Lesión autoinflingida";
        $causaexterna8->created_at="2022-08-16 09:12";
        $causaexterna8->save();

        $causaexterna9 = new param_causaexterna();
        $causaexterna9->descripcion="Sospecha de maltrato físico";
        $causaexterna9->created_at="2022-08-16 09:12";
        $causaexterna9->save();

        $causaexterna10 = new param_causaexterna();
        $causaexterna10->descripcion="Sospecha de abuso sexual";
        $causaexterna10->created_at="2022-08-16 09:12";
        $causaexterna10->save();

        $causaexterna11 = new param_causaexterna();
        $causaexterna11->descripcion="Sospecha de violencia sexual";
        $causaexterna11->created_at="2022-08-16 09:12";
        $causaexterna11->save();

        $causaexterna12 = new param_causaexterna();
        $causaexterna12->descripcion="Sospecha de maltrato emocional";
        $causaexterna12->created_at="2022-08-16 09:12";
        $causaexterna12->save();

        $causaexterna13 = new param_causaexterna();
        $causaexterna13->descripcion="Enfermedad general";
        $causaexterna13->created_at="2022-08-16 09:12";
        $causaexterna13->save();

        $causaexterna14 = new param_causaexterna();
        $causaexterna14->descripcion="Enfermedad profesional";
        $causaexterna14->created_at="2022-08-16 09:12";
        $causaexterna14->save();

        $causaexterna15 = new param_causaexterna();
        $causaexterna15->descripcion="Otra";
        $causaexterna15->created_at="2022-08-16 09:12";
        $causaexterna15->save();



        


    }
}
