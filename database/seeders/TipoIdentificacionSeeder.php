<?php

namespace Database\Seeders;

use App\Models\param\param_tipoidentificacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoIdentificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoidentificacion1 = new param_tipoidentificacion();
        $tipoidentificacion1->tipo="AS";
        $tipoidentificacion1->descripcion="Adulto sin identificar";
        $tipoidentificacion1->longmin="4";
        $tipoidentificacion1->longmax="13";
        $tipoidentificacion1->edadminanos="18";
        $tipoidentificacion1->edadmaxanos="130";
        $tipoidentificacion1->edadmindias="6571";
        $tipoidentificacion1->edadmaxdias="47815";
        $tipoidentificacion1->idusuario="1";
        $tipoidentificacion1->idprestador="0";
        $tipoidentificacion1->idnacionales="1";
        $tipoidentificacion1->idextranjeros="1";
        $tipoidentificacion1->created_at="2022-08-16 09:12";
        $tipoidentificacion1->save();

        $tipoidentificacion2 = new param_tipoidentificacion();
        $tipoidentificacion2->tipo="CC";
        $tipoidentificacion2->descripcion="Cedula de ciudadania";
        $tipoidentificacion2->longmin="3";
        $tipoidentificacion2->longmax="10";
        $tipoidentificacion2->edadminanos="18";
        $tipoidentificacion2->edadmaxanos="130";
        $tipoidentificacion2->edadmindias="6571";
        $tipoidentificacion2->edadmaxdias="47815";
        $tipoidentificacion2->idusuario="1";
        $tipoidentificacion2->idprestador="1";
        $tipoidentificacion2->idnacionales="1";
        $tipoidentificacion2->idextranjeros="1";
        $tipoidentificacion2->created_at="2022-08-16 09:12";
        $tipoidentificacion2->save();

        $tipoidentificacion3 = new param_tipoidentificacion();
        $tipoidentificacion3->tipo="CD";
        $tipoidentificacion3->descripcion="Carné diplomático";
        $tipoidentificacion3->longmin="6";
        $tipoidentificacion3->longmax="19";
        $tipoidentificacion3->edadminanos="7";
        $tipoidentificacion3->edadmaxanos="130";
        $tipoidentificacion3->edadmindias="2556";
        $tipoidentificacion3->edadmaxdias="47815";
        $tipoidentificacion3->idusuario="1";
        $tipoidentificacion3->idprestador="1";
        $tipoidentificacion3->idnacionales="1";
        $tipoidentificacion3->idextranjeros="1";
        $tipoidentificacion3->created_at="2022-08-16 09:12";
        $tipoidentificacion3->save();

        $tipoidentificacion4 = new param_tipoidentificacion();
        $tipoidentificacion4->tipo="CE";
        $tipoidentificacion4->descripcion="Cédula de extranjería";
        $tipoidentificacion4->longmin="7";
        $tipoidentificacion4->longmax="10";
        $tipoidentificacion4->edadminanos="7";
        $tipoidentificacion4->edadmaxanos="130";
        $tipoidentificacion4->edadmindias="2556";
        $tipoidentificacion4->edadmaxdias="47815";
        $tipoidentificacion4->idusuario="1";
        $tipoidentificacion4->idprestador="1";
        $tipoidentificacion4->idnacionales="0";
        $tipoidentificacion4->idextranjeros="1";
        $tipoidentificacion4->created_at="2022-08-16 09:12";
        $tipoidentificacion4->save();

        $tipoidentificacion5 = new param_tipoidentificacion();
        $tipoidentificacion5->tipo="CN";
        $tipoidentificacion5->descripcion="Certificado de nacido vivo";
        $tipoidentificacion5->longmin="3";
        $tipoidentificacion5->longmax="9";
        $tipoidentificacion5->edadminanos="0";
        $tipoidentificacion5->edadmaxanos="0";
        $tipoidentificacion5->edadmindias="1";
        $tipoidentificacion5->edadmaxdias="365";
        $tipoidentificacion5->idusuario="1";
        $tipoidentificacion5->idprestador="0";
        $tipoidentificacion5->idnacionales="1";
        $tipoidentificacion5->idextranjeros="0";
        $tipoidentificacion5->created_at="2022-08-16 09:12";
        $tipoidentificacion5->save();

        $tipoidentificacion6 = new param_tipoidentificacion();
        $tipoidentificacion6->tipo="MS";
        $tipoidentificacion6->descripcion="Menor sin identificar";
        $tipoidentificacion6->longmin="4";
        $tipoidentificacion6->longmax="15";
        $tipoidentificacion6->edadminanos="0";
        $tipoidentificacion6->edadmaxanos="17";
        $tipoidentificacion6->edadmindias="1";
        $tipoidentificacion6->edadmaxdias="6570";
        $tipoidentificacion6->idusuario="1";
        $tipoidentificacion6->idprestador="0";
        $tipoidentificacion6->idnacionales="1";
        $tipoidentificacion6->idextranjeros="1";
        $tipoidentificacion6->created_at="2022-08-16 09:12";
        $tipoidentificacion6->save();

        $tipoidentificacion7 = new param_tipoidentificacion();
        $tipoidentificacion7->tipo="NI";
        $tipoidentificacion7->descripcion="Nit - Número de identificación tributaria";
        $tipoidentificacion7->longmin="4";
        $tipoidentificacion7->longmax="16";
        $tipoidentificacion7->edadminanos="0";
        $tipoidentificacion7->edadmaxanos="0";
        $tipoidentificacion7->edadmindias="1";
        $tipoidentificacion7->edadmaxdias="365";
        $tipoidentificacion7->idusuario="0";
        $tipoidentificacion7->idprestador="1";
        $tipoidentificacion7->idnacionales="0";
        $tipoidentificacion7->idextranjeros="0";
        $tipoidentificacion7->created_at="2022-08-16 09:12";
        $tipoidentificacion7->save();

        $tipoidentificacion8 = new param_tipoidentificacion();
        $tipoidentificacion8->tipo="PA";
        $tipoidentificacion8->descripcion="Pasaporte";
        $tipoidentificacion8->longmin="6";
        $tipoidentificacion8->longmax="19";
        $tipoidentificacion8->edadminanos="0";
        $tipoidentificacion8->edadmaxanos="130";
        $tipoidentificacion8->edadmindias="1";
        $tipoidentificacion8->edadmaxdias="47815";
        $tipoidentificacion8->idusuario="1";
        $tipoidentificacion8->idprestador="1";
        $tipoidentificacion8->idnacionales="0";
        $tipoidentificacion8->idextranjeros="1";
        $tipoidentificacion8->created_at="2022-08-16 09:12";
        $tipoidentificacion8->save();

        $tipoidentificacion9 = new param_tipoidentificacion();
        $tipoidentificacion9->tipo="PE";
        $tipoidentificacion9->descripcion="Permiso especial de permanencia";
        $tipoidentificacion9->longmin="6";
        $tipoidentificacion9->longmax="18";
        $tipoidentificacion9->edadminanos="0";
        $tipoidentificacion9->edadmaxanos="130";
        $tipoidentificacion9->edadmindias="1";
        $tipoidentificacion9->edadmaxdias="47815";
        $tipoidentificacion9->idusuario="1";
        $tipoidentificacion9->idprestador="1";
        $tipoidentificacion9->idnacionales="0";
        $tipoidentificacion9->idextranjeros="1";
        $tipoidentificacion9->created_at="2022-08-16 09:12";
        $tipoidentificacion9->save();

        $tipoidentificacion10 = new param_tipoidentificacion();
        $tipoidentificacion10->tipo="PT";
        $tipoidentificacion10->descripcion="Permiso de protección temporal";
        $tipoidentificacion10->longmin="6";
        $tipoidentificacion10->longmax="10";
        $tipoidentificacion10->edadminanos="0";
        $tipoidentificacion10->edadmaxanos="130";
        $tipoidentificacion10->edadmindias="1";
        $tipoidentificacion10->edadmaxdias="47815";
        $tipoidentificacion10->idusuario="1";
        $tipoidentificacion10->idprestador="1";
        $tipoidentificacion10->idnacionales="0";
        $tipoidentificacion10->idextranjeros="1";
        $tipoidentificacion10->created_at="2022-08-16 09:12";
        $tipoidentificacion10->save();

        $tipoidentificacion11 = new param_tipoidentificacion();
        $tipoidentificacion11->tipo="RC";
        $tipoidentificacion11->descripcion="Registro Civil";
        $tipoidentificacion11->longmin="8";
        $tipoidentificacion11->longmax="11";
        $tipoidentificacion11->edadminanos="0";
        $tipoidentificacion11->edadmaxanos="17";
        $tipoidentificacion11->edadmindias="1";
        $tipoidentificacion11->edadmaxdias="6571";
        $tipoidentificacion11->idusuario="1";
        $tipoidentificacion11->idprestador="0";
        $tipoidentificacion11->idnacionales="1";
        $tipoidentificacion11->idextranjeros="0";
        $tipoidentificacion11->created_at="2022-08-16 09:12";
        $tipoidentificacion11->save();

        $tipoidentificacion12 = new param_tipoidentificacion();
        $tipoidentificacion12->tipo="RE";
        $tipoidentificacion12->descripcion="Residente especial para la paz";
        $tipoidentificacion12->longmin="6";
        $tipoidentificacion12->longmax="18";
        $tipoidentificacion12->edadminanos="0";
        $tipoidentificacion12->edadmaxanos="130";
        $tipoidentificacion12->edadmindias="1";
        $tipoidentificacion12->edadmaxdias="47815";
        $tipoidentificacion12->idusuario="1";
        $tipoidentificacion12->idprestador="1";
        $tipoidentificacion12->idnacionales="0";
        $tipoidentificacion12->idextranjeros="1";
        $tipoidentificacion12->created_at="2022-08-16 09:12";
        $tipoidentificacion12->save();

        $tipoidentificacion13 = new param_tipoidentificacion();
        $tipoidentificacion13->tipo="SC";
        $tipoidentificacion13->descripcion="Salvoconducto";
        $tipoidentificacion13->longmin="6";
        $tipoidentificacion13->longmax="19";
        $tipoidentificacion13->edadminanos="7";
        $tipoidentificacion13->edadmaxanos="130";
        $tipoidentificacion13->edadmindias="2556";
        $tipoidentificacion13->edadmaxdias="47815";
        $tipoidentificacion13->idusuario="1";
        $tipoidentificacion13->idprestador="0";
        $tipoidentificacion13->idnacionales="1";
        $tipoidentificacion13->idextranjeros="1";
        $tipoidentificacion13->created_at="2022-08-16 09:12";
        $tipoidentificacion13->save();

        $tipoidentificacion14 = new param_tipoidentificacion();
        $tipoidentificacion14->tipo="TI";
        $tipoidentificacion14->descripcion="arjeta de identidad";
        $tipoidentificacion14->longmin="10";
        $tipoidentificacion14->longmax="11";
        $tipoidentificacion14->edadminanos="7";
        $tipoidentificacion14->edadmaxanos="19";
        $tipoidentificacion14->edadmindias="2556";
        $tipoidentificacion14->edadmaxdias="7300";
        $tipoidentificacion14->idusuario="1";
        $tipoidentificacion14->idprestador="0";
        $tipoidentificacion14->idnacionales="1";
        $tipoidentificacion14->idextranjeros="0";
        $tipoidentificacion14->created_at="2022-08-16 09:12";
        $tipoidentificacion14->save();

    

    }
}
