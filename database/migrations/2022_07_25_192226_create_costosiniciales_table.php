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
        Schema::create('costosiniciales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('finca_id')->constrained();
            $table->foreignId('cliente_id')->constrained();
            $table->string('estadoProduccion');
            $table->integer('kilos');
            $table->string('valor');
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
        Schema::dropIfExists('costosiniciales');
    }
};
