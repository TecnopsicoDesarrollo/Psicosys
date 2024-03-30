<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestraMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestra_municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo',5)->nullable(false)->change();
            $table->string('ciudad',32)->nullable(false)->change();
            $table->string('dpto',2);
            $table->string('cod_muni',3);
            $table->unsignedBigInteger('iddpto');
            $table->timestamps();
            $table->foreign('iddpto')->references('id')->on('maestra_departams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maestra_municipios');
    }
}
