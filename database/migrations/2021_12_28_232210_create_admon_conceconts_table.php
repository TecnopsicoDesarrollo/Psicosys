<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmonConcecontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admon_conceconts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo',2)->nullable(false)->change();
            $table->string('concepto',40)->nullable(false)->change();
            $table->string('cta_debe',14);
            $table->string('cta_haber',14);
            $table->string('cta_iva',14);
            $table->string('cta_riva',14);
            $table->string('cta_dscto',14);
            $table->string('cta_inven',14);
            $table->string('tipo_mov',1);
            $table->string('cta_costo',14);
            $table->string('proyec',2);
            $table->string('cta_almac',14);
            $table->string('ivalmac',14);
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
        Schema::dropIfExists('admon_conceconts');
    }
}
