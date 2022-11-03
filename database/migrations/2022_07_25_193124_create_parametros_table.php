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
        Schema::create('parametros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('finca_id')->constrained();
            $table->foreignId('cliente_id')->constrained();
            $table->string('estadoProduccion')->nullable();
            $table->string('pesos')->nullable();
            $table->string('edad')->nullable();
            $table->string('valor')->nullable();
            $table->integer('porcentaje')->nullable();
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
        Schema::dropIfExists('parametros');
    }
};
