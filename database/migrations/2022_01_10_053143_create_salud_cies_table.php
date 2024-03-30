<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludCiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_cies', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('codigo',4)->unique();
            $table->string('nombre',150);
            $table->enum('sexo',['Hombre','Mujer','Ambos'])->nullable();
            $table->integer('edadmin')->nullable();
            $table->integer('edadmax')->nullable();
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
        Schema::dropIfExists('salud_cies');
    }
}
