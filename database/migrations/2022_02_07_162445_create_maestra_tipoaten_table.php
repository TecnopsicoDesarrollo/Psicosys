<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestraTipoatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestra_tipoaten', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('codigo',2);
            $table->string('nomtipo',40);
            $table->string('rip',1)->nullable();
            $table->string('bodega',3)->nullable();
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
        Schema::dropIfExists('maestra_tipoaten');
    }
}
