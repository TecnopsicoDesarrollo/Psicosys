<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposToDocumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maestra_documens', function (Blueprint $table) {
            $table->string('docu',2)->nullable()->after('id');
            $table->string('serdoc',4)->nullable()->after('docu');
            $table->string('nombre',30)->nullable()->after('serdoc');
            $table->decimal('no_ini',9)->nullable()->after('nombre');
            $table->decimal('no_fin',9)->nullable()->after('no_ini');
            $table->decimal('no_actual',9)->nullable()->after('no_fin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maestra_documens', function (Blueprint $table) {
            $table->dropColumn('docu');
            $table->dropColumn('serdoc');
            $table->dropColumn('nombre');
            $table->dropColumn('no_ini');
            $table->dropColumn('no_fin');
            $table->dropColumn('no_actual');
        });
    }
}
