<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHiscontraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_hiscontra', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->bigInteger('idNohisto')->nullable();
            $table->string('nomhisto',120)->nullable();
            $table->bigInteger('idEps')->nullable();
            $table->bigInteger('idContrato')->nullable();
            $table->string('nombreContra',40)->nullable();
            $table->foreign('idNohisto')->references('id')->on('salud_histocabs');
            $table->foreign('idEps')->references('id')->on('maestra_eps');
            $table->foreign('idContrato')->references('id')->on('salud_contratos');
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
        Schema::dropIfExists('salud_hiscontra');
    }
}
