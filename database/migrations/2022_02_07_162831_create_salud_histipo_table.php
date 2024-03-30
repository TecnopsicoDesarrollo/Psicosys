<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHistipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_histipo', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('codhis',3);
            $table->string('nombre',60);
            $table->bigInteger('idEspecial')->nullable();
            $table->foreign('idEspecial')->references('id')->on('maestra_especial');
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
        Schema::dropIfExists('salud_histipo');
    }
}
