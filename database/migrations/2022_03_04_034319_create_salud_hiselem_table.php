<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHiselemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_hiselem', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('codele',3);
            $table->string('elemento',50);
            $table->string('cm_nom',10)->nullable();
            $table->string('cm_tipo',1)->nullable();
            $table->decimal('cm_ancho',6,2)->nullable();
            $table->decimal('cm_deci',6,2)->nullable();
            $table->string('tipo',1)->nullable();
            $table->string('comando',150)->nullable();
            $table->boolean('predeter',1)->nullable();
            $table->longText('planti')->nullable();
            $table->longText('explica')->nullable();
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
        Schema::dropIfExists('salud_hiselem');
    }
}
