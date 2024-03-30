<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludCupssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_cups', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('aplicado',9)->nullable();
            $table->string('seccio',2)->nullable();
            $table->string('capitulo',2)->nullable();
            $table->string('grupo',2)->nullable();
            $table->string('subgrupo',1)->nullable();
            $table->string('categor',1)->nullable();
            $table->string('subcate',2)->nullable();
            $table->string('nombre',254);
            $table->string('codfase',2)->nullable();
            $table->string('codcups',6)->unique();
            $table->string('incluye',254)->nullable();
            $table->string('excluye',254)->nullable();
            $table->string('simult',254)->nullable();
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
        Schema::dropIfExists('salud_cups');
    }
}
