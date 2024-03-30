<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ChangeSaludDsmvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admon_clientes', function (Blueprint $table) {
            DB::statement("ALTER TABLE admon_clientes MODIFY porrte decimal(6,2)");
        });

        Schema::table('salud_dsmv', function (Blueprint $table) {
            $table->text('nombre')->change();
        });

        Schema::table('salud_dsmv', function (Blueprint $table) {
            $table->bigInteger('padre_id')->nullable()->after('padre');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admon_clientes', function (Blueprint $table) {
            DB::statement("ALTER TABLE admon_clientes MODIFY porrte varchar(2)");
        });

        Schema::table('salud_dsmv', function (Blueprint $table) {
            $table->string('nombre',100);
        });

        Schema::table('salud_dsmv', function (Blueprint $table) {
            $table->dropColumn('padre_id');
        });
    }
}
