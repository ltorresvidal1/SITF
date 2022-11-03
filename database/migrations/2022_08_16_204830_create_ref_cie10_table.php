<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_cie10', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',20)->unique();
            $table->string('nombre');
            $table->string('sexo',1);
            $table->integer('edadminanos');
            $table->integer('edadmaxanos');
            $table->integer('edadmindias');
            $table->integer('edadmaxdias');
            $table->bigInteger('mortalidad');
            $table->bigInteger('morbilidad');
            $table->string('tipo')->nullable();
            $table->string('clase',50)->nullable();
            $table->integer('capitulo')->nullable();
            $table->string('capitulononbre')->nullable();
            $table->string('agrupa1')->nullable();
            $table->string('agrupa1nonbre')->nullable();
            $table->string('agrupa2')->nullable();
            $table->string('agrupa2nonbre')->nullable();
            $table->string('actualizaciones')->nullable();
            $table->string('anos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_cie10');
    }
};


/*
COPY public.ref_cie10
(codigo, nonbre, sexo, edadminanos, edadmaxanos, edadmindias,edadmaxdias,mortalidad,morbilidad,tipo,clase,capitulo,capitulononbre,agrupa1,agrupa1nonbre,agrupa2,agrupa2nonbre,actualizaciones,anos) 
FROM '/Volumes/EXTERNO/PROYECTOS/LARAVEL/SITF/storage/app/app/cie10.txt' DELIMITER ',' ENCODING 'UTF8';

*/  
