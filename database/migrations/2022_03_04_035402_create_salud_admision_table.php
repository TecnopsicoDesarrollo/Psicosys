<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludAdmisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_admision', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('dcto',2);
            $table->string('serdoc',4);
            $table->integer('numadm');
            $table->bigInteger('idcontra');
            $table->bigInteger('idhisto');
            $table->dateTime('fecha',0);
            $table->bigInteger('idmedico');
            $table->bigInteger('idtipovinc')->nullable();
            $table->string('autoriz',15)->nullable();
            $table->string('codfase',2)->nullable();
            $table->bigInteger('idcodaten');
            $table->string('idfactura',20)->nullable();
            $table->bigInteger('idcupspres')->nullable();
            $table->bigInteger('iddiagpres')->nullable();
            $table->bigInteger('ideps')->nullable();
            $table->bigInteger('idcausaext')->nullable();
            $table->string('nopoliza',10)->nullable();
            $table->integer('edad')->nullable();
            $table->string('cod_edad',1)->nullable();
            $table->string('sexo',1)->nullable();
            $table->string('usuario',191)->nullable();
            $table->bigInteger('idfinalidad')->nullable();
            $table->string('idegreso',20)->nullable();
            $table->bigInteger('iddiaging')->nullable();
            $table->string('idcama',20)->nullable();
            $table->boolean('anula',1)->nullable();
            $table->decimal('copago',14,2)->nullable();
            $table->decimal('consant',14,2)->nullable();
            $table->decimal('consact',14,2)->nullable();
            $table->decimal('cuotamod',14,2)->nullable();
            $table->string('proyec',2)->nullable();
            $table->bigInteger('ideps1')->nullable();
            $table->longText('notas')->nullable();
            $table->decimal('admext',11,2)->nullable();
            $table->bigInteger('idmedsoli')->nullable();
            $table->dateTime('fechsoli',0)->nullable();
            $table->string('idorigen',20)->nullable();
            $table->boolean('c19fiebre',1)->nullable();
            $table->boolean('c19tos',1)->nullable();
            $table->boolean('c19difres',1)->nullable();
            $table->boolean('c19viaje',1)->nullable();
            $table->boolean('c19person',1)->nullable();
            $table->boolean('c19confir',1)->nullable();
            $table->boolean('c19trabaj',1)->nullable();
            $table->boolean('tipoest',1)->nullable();
            $table->foreign('idcontra')->references('id')->on('salud_contratos');
            $table->foreign('idhisto')->references('id')->on('salud_histocabs');
            $table->foreign('idmedico')->references('id')->on('maestra_medicos');
            $table->foreign('idtipovinc')->references('id')->on('maestra_tipovincs');
            $table->foreign('idcodaten')->references('id')->on('maestra_tipoaten');
            $table->foreign('idcupspres')->references('id')->on('salud_cups');
            $table->foreign('iddiagpres')->references('id')->on('salud_cies');
            $table->foreign('ideps')->references('id')->on('maestra_eps');
            $table->foreign('idcausaext')->references('id')->on('salud_causaexts');
            $table->foreign('idfinalidad')->references('id')->on('salud_finalidad');
            $table->foreign('iddiaging')->references('id')->on('salud_cies');
            $table->foreign('ideps1')->references('id')->on('maestra_eps');
            $table->foreign('idmedsoli')->references('id')->on('maestra_medicos');
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
        Schema::dropIfExists('salud_admision');
    }
}
