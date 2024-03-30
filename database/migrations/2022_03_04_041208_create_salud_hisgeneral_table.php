<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHisgeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_hisgeneral', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->bigInteger('idhisto');
            $table->dateTime('fecha');
            $table->bigInteger('idmedico');
            $table->bigInteger('idadmision')->nullable();
            $table->bigInteger('idcodaten')->nullable();
            $table->longText('moting')->nullable();
            $table->longText('enferact')->nullable();
            $table->longText('antefam')->nullable();
            $table->longText('anteper')->nullable();
            $table->decimal('peso',6,2)->nullable();
            $table->decimal('talla',6,2)->nullable();
            $table->decimal('frecar',6,2)->nullable();
            $table->decimal('freres',6,2)->nullable();
            $table->decimal('tempe',6,2)->nullable();
            $table->decimal('tendias',6,2)->nullable();
            $table->decimal('tensist',6,2)->nullable();
            $table->string('sentidos',254)->nullable();
            $table->string('huesos',254)->nullable();
            $table->string('respi',254)->nullable();
            $table->string('cardio',254)->nullable();
            $table->string('nervio',254)->nullable();
            $table->string('gastro',254)->nullable();
            $table->string('urinar',254)->nullable();
            $table->string('endocri',254)->nullable();
            $table->string('cabeza',254)->nullable();
            $table->bigInteger('iddiaging')->nullable();
            $table->bigInteger('iddiaging1')->nullable();
            $table->bigInteger('iddiaging2')->nullable();
            $table->bigInteger('iddiaging3')->nullable();
            $table->string('proxcita',60)->nullable();
            $table->bigInteger('iddiagsal')->nullable();
            $table->bigInteger('iddiagsal1')->nullable();
            $table->bigInteger('iddiagsal2')->nullable();
            $table->bigInteger('iddiagsal3')->nullable();
            $table->bigInteger('iddiagsal4')->nullable();
            $table->bigInteger('iddiagsal5')->nullable();
            $table->bigInteger('iddiagsal6')->nullable();
            $table->decimal('imc',6,2)->nullable();
            $table->string('imcexp',20)->nullable();
            $table->decimal('pt',6,2)->nullable();
            $table->string('ptexp',40)->nullable();
            $table->decimal('te',6,2)->nullable();
            $table->string('teexp',40)->nullable();
            $table->decimal('pce',6,2)->nullable();
            $table->string('pceexp',40)->nullable();
            $table->decimal('pe',6,2)->nullable();
            $table->string('peexp',40)->nullable();
            $table->decimal('cc',6,2)->nullable();
            $table->string('ccexp',40)->nullable();
            $table->longText('alergia')->nullable();
            $table->boolean('sivigila',1)->nullable();
            $table->dateTime('fechfin')->nullable();
            $table->string('edadmes',4)->nullable();
            $table->longText('tratam')->nullable();
            $table->longText('revsist')->nullable();
            $table->longText('exafisg')->nullable();
            $table->longText('examen')->nullable();
            $table->longText('impdiaa')->nullable();
            $table->longText('tratamb')->nullable();
            $table->longText('evoamb')->nullable();
            $table->longText('trathos')->nullable();
            $table->longText('evohos')->nullable();
            $table->longText('tramedg')->nullable();
            $table->longText('evomedg')->nullable();
            $table->longText('apreper')->nullable();
            $table->longText('evoenfe')->nullable();
            $table->longText('evoterocu')->nullable();
            $table->longText('resum')->nullable();
            $table->longText('concprof')->nullable();
            $table->longText('antepef')->nullable();
            $table->longText('valsicam')->nullable();
            $table->longText('valsicho')->nullable();
            $table->longText('reapoyo')->nullable();
            $table->longText('evsocial')->nullable();
            $table->longText('ningre')->nullable();
            $table->longText('evohosdia')->nullable();
            $table->longText('laborat')->nullable();
            $table->longText('planman')->nullable();
            $table->longText('planegr')->nullable();
            $table->foreign('idhisto')->references('id')->on('salud_histocabs');
            $table->foreign('idmedico')->references('id')->on('maestra_medicos');
            $table->foreign('idadmision')->references('id')->on('salud_admision');
            $table->foreign('idcodaten')->references('id')->on('maestra_tipoaten');
            $table->foreign('iddiaging')->references('id')->on('salud_cies');
            $table->foreign('iddiaging1')->references('id')->on('salud_cies');
            $table->foreign('iddiaging2')->references('id')->on('salud_cies');
            $table->foreign('iddiaging3')->references('id')->on('salud_cies');
            $table->foreign('iddiagsal')->references('id')->on('salud_cies');
            $table->foreign('iddiagsal1')->references('id')->on('salud_cies');
            $table->foreign('iddiagsal2')->references('id')->on('salud_cies');
            $table->foreign('iddiagsal3')->references('id')->on('salud_cies');
            $table->foreign('iddiagsal4')->references('id')->on('salud_cies');
            $table->foreign('iddiagsal5')->references('id')->on('salud_cies');
            $table->foreign('iddiagsal6')->references('id')->on('salud_cies');
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
        Schema::dropIfExists('salud_hisgeneral');
    }
}
