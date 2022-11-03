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
        Schema::create('ref_divipola', function (Blueprint $table) {
            $table->id();
            $table->integer('depcodigo');
            $table->integer('muncodigo');
            $table->string('depnombre');
            $table->string('munnombre');
            $table->integer('urbana');
            $table->integer('rural');
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
        Schema::dropIfExists('ref_divipola');
    }
};
/*COPY public.divipola
(depcodigo, muncodigo, depnombre, munnombre, urbana, rural) FROM '/Volumes/EXTERNO/PROYECTOS/LARAVEL/SITF/storage/app/app/divipola.txt' DELIMITER ',' ENCODING 'UTF8';
*/