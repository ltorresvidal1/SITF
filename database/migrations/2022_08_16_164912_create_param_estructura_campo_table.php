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
        Schema::create('param_estructura_campo', function (Blueprint $table) {
            $table->id();
            $table->integer('param_estructura_id');
            $table->string('codigocampo');
            $table->string('descripcion');
            $table->integer('longitud');
            $table->string('tipo');
            $table->bigInteger('obligatorio');
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
        Schema::dropIfExists('param_estructura_campo');
    }
};
