<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHisseguTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_hissegu', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->bigInteger('idcodhis');
            $table->bigInteger('idcodele');
            $table->string('usuario',191)->nullable();
            $table->string('sec_prompt',100)->nullable();
            $table->bigInteger('idmedico');
            $table->boolean('sec_adic',1)->nullable();
            $table->boolean('sec_edit',1)->nullable();
            $table->foreign('idcodhis')->references('id')->on('salud_histipo');
            $table->foreign('idcodele')->references('id')->on('salud_hiselem');
            $table->foreign('idmedico')->references('id')->on('maestra_medicos');
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
        Schema::dropIfExists('salud_hissegu');
    }
}
