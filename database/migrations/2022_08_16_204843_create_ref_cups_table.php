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
        Schema::create('ref_cups', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10)->unique();
            $table->string('nombre')->nullable();
            $table->string('sexo',1)->nullable();
            $table->integer('edadminanos')->nullable();
            $table->integer('edadmaxanos')->nullable();
            $table->integer('edadmindias')->nullable();
            $table->integer('edadmaxdias')->nullable();
            $table->integer('maxvecesdias')->nullable();
            $table->integer('maxvecesvida')->nullable();
            $table->integer('tiempolimitedias')->nullable();
            $table->bigInteger('quirurgico')->nullable();
            $table->string('tipoatencion',2)->nullable();
            $table->string('tipoprocedimiento',50)->nullable();
            $table->string('seccion')->nullable();
            $table->string('seccionnombre',100)->nullable();
            $table->string('capitulo')->nullable();
            $table->string('capitulonombre',100)->nullable();
            $table->string('gruponombre',100)->nullable();
            $table->string('subgruponombre',150)->nullable();
            $table->string('categorianombre')->nullable();
            $table->string('resolucioncups')->nullable();
            $table->string('resolucionpos')->nullable();
            $table->string('anoscups')->nullable();
            $table->string('anospos')->nullable();
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
        Schema::dropIfExists('ref_cups');
    }
};


/*COPY public.divipola
(codigo, nombre, sexo, edadminanos, edadmaxanos, edadmindias,edadmaxdias,maxvecesdias,maxvecesvida,tiempolimitedias,quirurgico,tipoatencion,tipoprocedimiento,session,sessionnombre,
capitulo,capitulonombre,gruponombre,subgruponombre,categorianombre,resolucioncups,resolucionpos,anoscups,anospos) 
FROM '/Volumes/EXTERNO/PROYECTOS/LARAVEL/SITF/storage/app/app/cups.txt' DELIMITER ',' ENCODING 'UTF8';
*/