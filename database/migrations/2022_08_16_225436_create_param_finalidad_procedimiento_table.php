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
        Schema::create('param_finalidad_procedimiento', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',100);
            $table->string('tipofinalidad',60);
            $table->integer('edadminima');
            $table->integer('edadmaxima');
            $table->integer('edadminimadias');
            $table->integer('edadmaximadias');
            $table->string('sexo',1);
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
        Schema::dropIfExists('param_finalidad_procedimiento');
    }
};
