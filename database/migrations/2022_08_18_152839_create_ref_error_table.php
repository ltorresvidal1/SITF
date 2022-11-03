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
        Schema::create('ref_error', function (Blueprint $table) {
            $table->id();
            $table->integer('estrucura_id'); 
            $table->string('codigoerror',15);
            $table->string('nombreerror');
            $table->string('descripcionerror');
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
        Schema::dropIfExists('ref_error');
    }
};
