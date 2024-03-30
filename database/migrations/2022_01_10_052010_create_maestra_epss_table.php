<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestraEpssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestra_eps', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('codigo',6)->unique();
            $table->string('entidad',78);
            $table->string('tipenti',2)->nullable();
            $table->string('no_identi',15)->nullable();
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
        Schema::dropIfExists('maestra_eps');
    }
}
