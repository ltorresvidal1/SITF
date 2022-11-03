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
        Schema::create('rips_consultas', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo_rips')->nullable(); 
            $table->integer('id_registro')->nullable(); 	
            $table->string('factura',20)->nullable();
            $table->string('prestador',15)->nullable();
            $table->string('tipoidentificacion',2)->nullable();       												
            $table->string('numeroidentificacion',20)->nullable();
            $table->string('fechaconsulta',10)->nullable();
            $table->string('numeroautorizacion',15)->nullable();
            $table->string('codigoprocedimiento',8)->nullable();
            $table->string('finalidadconsulta',2)->nullable();
            $table->string('causaexterna',2)->nullable();
            $table->string('diagprincipal',6)->nullable();
            $table->string('diagrelacionado1',6)->nullable();
            $table->string('diagrelacionado2',6)->nullable();
            $table->string('diagrelacionado3',6)->nullable();
            $table->string('tipodiagnostico',1)->nullable();
            $table->string('valorconsulta',15)->nullable();
            $table->string('valorcuotamoderadora',15)->nullable();
            $table->string('valortotalneto',15)->nullable();
            $table->date('fecconsdate')->nullable();
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
        Schema::dropIfExists('rips_consultas');
    }
};
