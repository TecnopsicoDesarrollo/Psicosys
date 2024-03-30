<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_contratos', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('idcontra',15);
            $table->string('plan',10);
            $table->bigInteger('idEps');
            $table->string('nombre',40);
            $table->date('fechini');
            $table->integer('durac');
            $table->date('fechfin')->nullable();
            $table->date('fechfirma')->nullable();
            $table->string('telconta',15)->nullable();
            $table->boolean('firmado',1)->nullable();
            $table->unsignedBigInteger('idManual');
            $table->enum('tipo',['Evento','Paquete','Capitado']);
            $table->decimal('topemes',14,2)->nullable();
            $table->decimal('salmin',14,2)->nullable();
            $table->enum('tipotar',['Plena','Aumentar','Disminuir']);
            $table->decimal('porcen',6,2)->nullable();
            $table->string('usuario',191)->nullable();
            $table->unsignedBigInteger('idManual1')->nullable();
            $table->longText('notas')->nullable();
            $table->bigInteger('idEps1')->nullable();
            $table->boolean('modival',1)->nullable();
            $table->timestamps();
            $table->foreign('idEps')->references('id')->on('maestra_eps');
            $table->foreign('idEps1')->references('id')->on('maestra_eps');
            $table->foreign('idManual')->references('id')->on('salud_manuales');
            $table->foreign('idManual1')->references('id')->on('salud_manuales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salud_contratos');
    }
}
