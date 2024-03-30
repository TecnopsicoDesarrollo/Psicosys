<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludDsmvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_dsmv', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('padre',10)->nullable();
            $table->string('codigo',10);
            $table->string('nombre',100);
            $table->string('eje',1)->nullable();
            $table->string('cie10',4)->nullable();
            $table->bigInteger('idCie10')->nullable();
            $table->longText('criterio')->nullable();
            $table->timestamps();
            $table->foreign('idCie10')->references('id')->on('salud_cies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salud_dsmv');
    }
}
