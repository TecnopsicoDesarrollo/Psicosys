<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ChangeCamposenumVarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('salud_cies', function (Blueprint $table) {
            DB::statement("ALTER TABLE salud_cies MODIFY sexo varchar(1)");
        });

        Schema::table('admon_clientes', function (Blueprint $table) {
            DB::statement("ALTER TABLE admon_clientes MODIFY zona varchar(1)");
            DB::statement("ALTER TABLE admon_clientes MODIFY tipoper varchar(1)");
            DB::statement("ALTER TABLE admon_clientes MODIFY regimen varchar(1)");
            DB::statement("ALTER TABLE admon_clientes MODIFY regitrib varchar(2)");
        });

        Schema::table('salud_histocabs', function (Blueprint $table) {
            DB::statement("ALTER TABLE salud_histocabs MODIFY cod_edad varchar(1)");
            DB::statement("ALTER TABLE salud_histocabs MODIFY sexo varchar(1)");
            DB::statement("ALTER TABLE salud_histocabs MODIFY estcivil varchar(2)");
            DB::statement("ALTER TABLE salud_histocabs MODIFY zona varchar(1)");
            DB::statement("ALTER TABLE salud_histocabs MODIFY tipoafil varchar(1)");
        });

        Schema::table('salud_contratos', function (Blueprint $table) {
            DB::statement("ALTER TABLE salud_contratos MODIFY tipo varchar(2)");
            DB::statement("ALTER TABLE salud_contratos MODIFY tipotar varchar(1)");
        });

        Schema::table('salud_tarifas', function (Blueprint $table) {
            DB::statement("ALTER TABLE salud_tarifas MODIFY sexo varchar(1)");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('salud_cies', function (Blueprint $table) {
            DB::statement("ALTER TABLE salud_cies MODIFY sexo varchar(1)");
        });

        Schema::table('admon_clientes', function (Blueprint $table) {
            DB::statement("ALTER TABLE admon_clientes MODIFY zona varchar(1)");
            DB::statement("ALTER TABLE admon_clientes MODIFY tipoper varchar(1)");
            DB::statement("ALTER TABLE admon_clientes MODIFY regimen varchar(1)");
            DB::statement("ALTER TABLE admon_clientes MODIFY regitrib varchar(2)");
        });

        Schema::table('salud_histocabs', function (Blueprint $table) {
            DB::statement("ALTER TABLE salud_histocabs MODIFY cod_edad varchar(1)");
            DB::statement("ALTER TABLE salud_histocabs MODIFY sexo varchar(1)");
            DB::statement("ALTER TABLE salud_histocabs MODIFY estcivil varchar(2)");
            DB::statement("ALTER TABLE salud_histocabs MODIFY zona varchar(1)");
            DB::statement("ALTER TABLE salud_histocabs MODIFY tipoafil varchar(1)");
        });

        Schema::table('salud_contratos', function (Blueprint $table) {
            DB::statement("ALTER TABLE salud_contratos MODIFY tipo varchar(2)");
            DB::statement("ALTER TABLE salud_contratos MODIFY tipotar varchar(1)");
        });

        Schema::table('salud_tarifas', function (Blueprint $table) {
            DB::statement("ALTER TABLE salud_tarifas MODIFY sexo varchar(1)");
        });
    }
}
