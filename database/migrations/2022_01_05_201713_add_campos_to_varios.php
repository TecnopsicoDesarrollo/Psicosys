<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddCamposToVarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admon_conceconts', function (Blueprint $table) {
            $table->string('codigo',2)->nullable()->after('id');
            $table->string('concepto',40)->nullable()->after('codigo');
        });

        Schema::table('salud_manuales', function (Blueprint $table) {
            $table->string('manual',5)->nullable()->after('id');
            $table->string('nombre',40)->nullable()->after('manual');
        });

        Schema::table('maestra_municipios', function (Blueprint $table) {
            $table->string('codigo',5)->nullable()->after('id');
            $table->string('ciudad',32)->nullable()->after('codigo');
        });

        Schema::table('sieparams', function (Blueprint $table) {
            $table->string('empresa',40)->nullable()->after('id');
            $table->string('direccion',60)->nullable()->after('empresa');
            $table->string('telefono',25)->nullable()->after('direccion');
            $table->string('rut',15)->nullable()->after('telefono');
            $table->string('ciudad',25)->nullable()->after('rut');
            $table->string('tipoemp',1)->nullable()->after('ctacopgas');            
            DB::statement("ALTER TABLE sieparams MODIFY numemp integer(9)");
            DB::statement("ALTER TABLE sieparams MODIFY iva decimal(6,2)");
            DB::statement("ALTER TABLE sieparams MODIFY porcree decimal(6,2)");
            DB::statement("ALTER TABLE sieparams MODIFY tasaica decimal(6,2)");
            DB::statement("ALTER TABLE sieparams MODIFY porcbom decimal(6,2)");
            DB::statement("ALTER TABLE sieparams MODIFY porrte decimal(6,2)");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admon_conceconts', function (Blueprint $table) {
            $table->dropColumn('codigo');
            $table->dropColumn('concepto');
        });

        Schema::table('salud_manuales', function (Blueprint $table) {
            $table->dropColumn('manual');
            $table->dropColumn('nombre');
        });

        Schema::table('maestra_municipios', function (Blueprint $table) {
            $table->dropColumn('codigo');
            $table->dropColumn('ciudad');
        });  
        
        Schema::table('sieparams', function (Blueprint $table) {
            $table->dropColumn('empresa');
            $table->dropColumn('direccion');
            $table->dropColumn('telefono');
            $table->dropColumn('rut');
            $table->dropColumn('ciudad');
            $table->dropColumn('tipoemp');
        });  
    }
}
