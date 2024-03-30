<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHisestruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_hisestru', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->bigInteger('idcodhis');
            $table->bigInteger('idcodele');
            $table->integer('orden');
            $table->boolean('siplanti',1)->nullable();
            $table->longText('planti')->nullable();
            $table->boolean('formul',1)->nullable();
            $table->string('tipo',1)->nullable();
            $table->string('comando',150)->nullable();
            $table->string('areaapli',1)->nullable();
            $table->foreign('idcodhis')->references('id')->on('salud_histipo');
            $table->foreign('idcodele')->references('id')->on('salud_hiselem');
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
        Schema::dropIfExists('salud_hisestru');
    }
}
