<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHisfotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_hisfotos', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->bigInteger('idhisto');
            $table->dateTime('fecha');
            $table->bigInteger('idmedico')->nullable();
            $table->bigInteger('idadmision')->nullable();
            $table->string('foto1',191)->nullable();
            $table->string('foto2',191)->nullable();
            $table->string('foto3',191)->nullable();
            $table->string('foto4',191)->nullable();
            $table->string('foto5',191)->nullable();
            $table->string('foto6',191)->nullable();
            $table->string('foto7',191)->nullable();
            $table->string('foto8',191)->nullable();
            $table->string('foto9',191)->nullable();
            $table->string('foto10',191)->nullable();
            $table->foreign('idhisto')->references('id')->on('salud_histocabs');
            $table->foreign('idmedico')->references('id')->on('maestra_medicos');
            $table->foreign('idadmision')->references('id')->on('salud_admision');
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
        Schema::dropIfExists('salud_hisfotos');
    }
}
