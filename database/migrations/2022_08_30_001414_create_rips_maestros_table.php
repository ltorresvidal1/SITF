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
        Schema::create('rips_maestros', function (Blueprint $table) {
            $table->id();
            $table->integer('ips_id'); 
            $table->foreignId('user_id')->constrained();
            $table->string('codigo_rips',100);
            $table->string('archivos',100);
            $table->string('periodo',2);
            $table->string('ano',4);
            $table->dateTime('fecharegistro');
            $table->integer('idestado');
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
        Schema::dropIfExists('rips_maestros');
    }
};
