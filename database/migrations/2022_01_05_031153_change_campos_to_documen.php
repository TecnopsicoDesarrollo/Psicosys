<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ChangeCamposToDocumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maestra_documens', function (Blueprint $table) {
            DB::statement("ALTER TABLE maestra_documens MODIFY no_ini integer(9)");
            DB::statement("ALTER TABLE maestra_documens MODIFY no_fin integer(9)");
            DB::statement("ALTER TABLE maestra_documens MODIFY no_actual integer(9)");
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
            DB::statement("ALTER TABLE maestra_documens MODIFY no_ini varchar(9)");
            DB::statement("ALTER TABLE maestra_documens MODIFY no_fin varchar(9)");
            DB::statement("ALTER TABLE maestra_documens MODIFY no_actual varchar(9)");
        });
    }
}
