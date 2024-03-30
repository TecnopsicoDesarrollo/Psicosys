<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludContrasersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_contrasers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idContra');
            $table->bigInteger('idEps');
            $table->unsignedBigInteger('idManual');
            $table->bigInteger('idCodserv');
            $table->string('nombre',191);
            $table->bigInteger('idCodcups');
            $table->decimal('incremen',6,2)->nullable();
            $table->string('tipotar',1)->nullable();
            $table->unsignedBigInteger('idConcecont');
            $table->string('grupquir',2)->nullable();
            $table->boolean('excluido',1)->nullable();
            $table->timestamps();
            $table->foreign('idContra')->references('id')->on('salud_contratos');
            $table->foreign('idEps')->references('id')->on('maestra_eps');
            $table->foreign('idManual')->references('id')->on('salud_manuales');
            $table->foreign('idCodserv')->references('id')->on('salud_tarifas');
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
        Schema::dropIfExists('salud_contrasers');
    }
}
