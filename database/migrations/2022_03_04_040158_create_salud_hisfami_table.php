<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHisfamiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_hisfami', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->bigInteger('idhisto');
            $table->dateTime('fecha');
            $table->bigInteger('idmedico')->nullable();
            $table->bigInteger('idadmision')->nullable();
            $table->string('miembro',50)->nullable();
            $table->string('parencon',20)->nullable();
            $table->integer('edad')->nullable();
            $table->string('cod_edad',1)->nullable();
            $table->string('escolar',2)->nullable();
            $table->bigInteger('idocupac')->nullable();
            $table->boolean('vivo',1)->nullable();
            $table->date('muerfec')->nullable();
            $table->string('relacion',1)->nullable();
            $table->string('idesex',1)->nullable();
            $table->string('otropare',30)->nullable();
            $table->boolean('habita',1)->nullable();
            $table->longText('observ')->nullable();
            $table->boolean('aporte',1)->nullable();
            $table->string('celular',20)->nullable();
            $table->string('direccion',50)->nullable();
            $table->boolean('familia',1)->nullable();
            $table->boolean('redapoy',1)->nullable();
            $table->foreign('idhisto')->references('id')->on('salud_histocabs');
            $table->foreign('idmedico')->references('id')->on('maestra_medicos');
            $table->foreign('idadmision')->references('id')->on('salud_admision');
            $table->foreign('idocupac')->references('id')->on('maestra_ocupacs');
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
        Schema::dropIfExists('salud_hisfami');
    }
}
