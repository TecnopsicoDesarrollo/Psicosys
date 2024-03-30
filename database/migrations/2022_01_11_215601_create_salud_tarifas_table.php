<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludTarifasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_tarifas', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->unsignedBigInteger('idManual');
            $table->string('codigo',10);
            $table->string('nombre',191);
            $table->decimal('uvresp',14,2)->nullable();
            $table->decimal('uvrgen',14,2)->nullable();
            $table->decimal('valuvr',14,2)->nullable();
            $table->decimal('costo',14,2)->nullable();
            $table->bigInteger('idCodcups');
            $table->string('grupquir',2)->nullable();
            $table->enum('sexo',['Hombre','Mujer','Ambos'])->nullable();
            $table->integer('edadmin')->nullable();
            $table->integer('edadmax')->nullable();
            $table->string('tipotar',1)->nullable();
            $table->unsignedBigInteger('idConcecont');
            $table->boolean('iva',1)->nullable();
            $table->decimal('porciva',6,2)->nullable();
            $table->string('codrela',10)->nullable();
            $table->string('tipocon',1)->nullable();
            $table->string('codtar2',10)->nullable();
            $table->boolean('excluido',1)->nullable();
            $table->string('codatc',12)->nullable();
            $table->string('usuario',191)->nullable();
            $table->timestamps();
            $table->foreign('idManual')->references('id')->on('salud_manuales');
            $table->foreign('idCodcups')->references('id')->on('salud_cups');
            $table->foreign('idConcecont')->references('id')->on('admon_conceconts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salud_tarifas');
    }
}
