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
        Schema::create('param_tipo_identificacion', function (Blueprint $table) {
            $table->id();
            $table->string('tipo',2)->unique();
            $table->string('descripcion');
            $table->integer('longmin');
            $table->integer('longmax');
            $table->integer('edadminanos');
            $table->integer('edadmaxanos');
            $table->integer('edadmindias');
            $table->integer('edadmaxdias');
            $table->bigInteger('idusuario');
            $table->bigInteger('idprestador');
            $table->bigInteger('idnacionales');
            $table->bigInteger('idextranjeros');
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
        Schema::dropIfExists('param_tipo_identificacion');
    }
};
