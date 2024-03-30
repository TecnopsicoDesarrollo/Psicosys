<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHisplantiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_hisplanti', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('codplanti',3);
            $table->string('nombre',100);
            $table->longText('planti')->nullable();
            $table->string('tipoexa',1)->nullable();
            $table->integer('edadmin')->nullable();
            $table->integer('edadmax')->nullable();
            $table->string('sexo',1)->nullable();
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
        Schema::dropIfExists('salud_hisplanti');
    }
}
