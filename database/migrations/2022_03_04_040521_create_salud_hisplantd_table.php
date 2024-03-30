<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHisplantdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_hisplantd', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->bigInteger('idplanti');
            $table->string('tipoexa',1)->nullable();
            $table->bigInteger('idCodcups')->nullable();
            $table->string('descups',254)->nullable();
            $table->integer('edadmin')->nullable();
            $table->integer('edadmax')->nullable();
            $table->string('sexo',1)->nullable();
            $table->string('usuario',191)->nullable();
            $table->foreign('idplanti')->references('id')->on('salud_hisplanti');
            $table->foreign('idCodcups')->references('id')->on('salud_cups');
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
        Schema::dropIfExists('salud_hisplantd');
    }
}
