<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestraDocumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestra_documens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('docu',2)->nullable(false)->change();
            $table->string('serdoc',4)->nullable(false)->change();
            $table->string('nombre',30)->nullable(false)->change();
            $table->decimal('no_ini',9)->nullable(false)->change();
            $table->decimal('no_fin',9)->nullable(false)->change();
            $table->decimal('no_actual',9)->nullable(false)->change();
            $table->boolean('manual');
            $table->boolean('predeter');
            $table->boolean('facele');
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
        Schema::dropIfExists('maestra_documens');
    }
}
