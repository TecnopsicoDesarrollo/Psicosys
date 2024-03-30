<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingVariasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maestra_eps', function (Blueprint $table) {
            $table->bigInteger('idTercero')->nullable()->after('no_identi');
            $table->foreign('idTercero')->references('id')->on('admon_clientes');
        });
        
        Schema::table('salud_cups', function (Blueprint $table) {
            $table->bigInteger('idCapitulo')->nullable()->after('simult');
            $table->foreign('idCapitulo')->references('id')->on('salud_cupscapis');
        });

        Schema::table('admon_clientes', function (Blueprint $table) {
            $table->bigInteger('idEps')->nullable()->after('eseps');
            $table->foreign('idEps')->references('id')->on('maestra_eps');
        });

        Schema::table('salud_histocabs', function (Blueprint $table) {
            $table->bigInteger('idTipovinc')->nullable()->after('e_mail');
            $table->foreign('idTipovinc')->references('id')->on('maestra_tipovincs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('salud_cups', function (Blueprint $table) {
            $table->dropForeign('salud_cups_idcapitulo_foreign');
            $table->dropColumn('idCapitulo');
        });

        Schema::table('maestra_eps', function (Blueprint $table) {
            $table->dropForeign('maestra_eps_idtercero_foreign');
            $table->dropColumn('idTercero');
        });
        
        Schema::table('admon_clientes', function (Blueprint $table) {
            $table->dropForeign('admon_clientes_ideps_foreign');
            $table->dropColumn('idEps');
        });

        Schema::table('salud_histocabs', function (Blueprint $table) {
            $table->dropForeign('salud_histocabs_idtipovinc_foreign');
            $table->dropColumn('idTipovinc');
        });
    }
}
