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
        Schema::create('rips_usuarios', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo_rips')->nullable(); 
            $table->integer('id_registro')->nullable(); 	
            $table->string('tipoidentificacion',2)->nullable();       												
            $table->string('numeroidentificacion',20)->nullable();
            $table->string('administradora',8)->nullable();
            $table->string('tipousuario',1)->nullable();
            $table->string('primerapellido',30)->nullable();
            $table->string('segundoapellido',30)->nullable();
            $table->string('primernombre',50)->nullable();
            $table->string('segundonombre',20)->nullable();
            $table->string('edad',3)->nullable();
            $table->string('unidadedad',1)->nullable();
            $table->string('sexo',1)->nullable();
            $table->string('departamento',2)->nullable();
            $table->string('municipio',3)->nullable();
            $table->string('zona',1)->nullable();
            $table->integer('edadDias')->nullable();
            $table->integer('departamentoint')->nullable();
            $table->integer('municipioint')->nullable();

            
            											 
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
        Schema::dropIfExists('rips_usuarios');
    }
};
