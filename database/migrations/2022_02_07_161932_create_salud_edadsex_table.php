<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludEdadsexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_edadsex', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('edad',4)->nullable();
            $table->string('dessev',4)->nullable();
            $table->string('desmod',9)->nullable();
            $table->string('normal',9)->nullable();
            $table->string('sobpe',9)->nullable();
            $table->string('obes',4)->nullable();
            $table->string('sexo',1);
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
        Schema::dropIfExists('salud_edadsex');
    }
}
