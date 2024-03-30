<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestraMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestra_medicos', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('codigo',5);
            $table->string('nombre',40);
            $table->string('direccion',30)->nullable();
            $table->string('telefono',15)->nullable();
            $table->string('celular',20)->nullable();
            $table->string('mail',50)->nullable();
            $table->string('tarjprof',15)->nullable();
            $table->bigInteger('idEspecial')->nullable();
            $table->string('intervate',5)->nullable();
            $table->string('firma',150)->nullable();
            $table->string('No_identi',15)->nullable();
            $table->date('fech_nac')->nullable();
            $table->string('tipodocu',2)->nullable();
            $table->integer('edad')->nullable();
            $table->string('cod_edad',1)->nullable();
            $table->boolean('activo')->nullable();
            $table->unsignedBigInteger('idUser')->nullable();
            $table->string('sexo',1)->nullable();
            $table->string('dptonac',2)->nullable();
            $table->unsignedBigInteger('idciudad')->nullable();
            $table->string('dptores',2)->nullable();
            $table->unsignedBigInteger('idciunac')->nullable();
            $table->string('sangre',3)->nullable();
            $table->string('foto',150)->nullable();
            $table->string('area',1)->nullable();
            $table->decimal('salbasico',12,2)->nullable();
            $table->bigInteger('idSalud')->nullable();
            $table->bigInteger('idPension')->nullable();
            $table->foreign('idciudad')->references('id')->on('maestra_municipios');
            $table->foreign('idciunac')->references('id')->on('maestra_municipios');
            $table->foreign('idEspecial')->references('id')->on('maestra_especial');
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idSalud')->references('id')->on('admon_clientes');
            $table->foreign('idPension')->references('id')->on('admon_clientes');
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
        Schema::dropIfExists('maestra_medicos');
    }
}
