<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHisanexoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_hisanexo', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->bigInteger('idadmision')->nullable();
            $table->bigInteger('idhisto');
            $table->dateTime('fecha')->nullable();
            $table->string('detalle',100)->nullable();
            $table->string('rutadoc',100)->nullable();
            $table->string('area',20)->nullable();
            $table->string('usuario',191)->nullable();
            $table->foreign('idhisto')->references('id')->on('salud_histocabs');
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
        Schema::dropIfExists('salud_hisanexo');
    }
}
