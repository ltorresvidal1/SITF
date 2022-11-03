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
        Schema::create('rips_facturas', function (Blueprint $table) {
            $table->id();
            $table->integer('ips_id')->nullable(); 
            $table->integer('id_registro')->nullable(); 	
            $table->string('prestador',15)->nullable();
            $table->string('razonsocial',100)->nullable();
            $table->string('tipoidentificacion',2)->nullable();       												
            $table->string('numidentificacion',20)->nullable();
            $table->string('numerofactura',20)->nullable();
            $table->string('fechaexpedicion',10)->nullable();
            $table->string('fechainicio',10)->nullable();
            $table->string('fechafinal',10)->nullable();
            $table->string('administradora',8)->nullable();
            $table->string('nombreadministradora',100)->nullable();
            $table->string('contrato',20)->nullable();
            $table->string('planbeneficios',30)->nullable();
            $table->string('numeroPoliza',10)->nullable();
            $table->string('valorcopago',15)->nullable();
            $table->string('valorcomision',15)->nullable();
            $table->string('valordescuentos',15)->nullable();
            $table->string('valorneto',15)->nullable();																	
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
        Schema::dropIfExists('rips_facturas');
    }
};
