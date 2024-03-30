<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->truncateTables([
            'salud_causaexts',
            'salud_finalidad',
            'maestra_tipoaten'
            'maestra_tipovincs'
            'maestra_departams',
            'maestra_ocupacs',
            'maestra_documens',
            'maestra_especial',
            'maestra_municipios',
            'salud_cupscapis',
            'salud_cies',
            'salud_dsmv',
            'admon_conceconts',
            'salud_manuales',
            'salud_hiselem',
            'salud_cups',
            'salud_tarifas',
        ]);

        // Ejecutar los seeders:
        $this->call(CausaextSeeder::class);
        $this->call(FinalidadSeeder::class);
        $this->call(TipoatenSeeder::class);
        $this->call(TipovincSeeder::class);
        $this->call(DepartamSeeder::class);
        $this->call(OcupacSeeder::class);
        $this->call(DocumenSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(CupscapiSeeder::class);
        $this->call(CieSeeder::class);
        $this->call(DsmvSeeder::class);
        $this->call(ConcecontSeeder::class);
        $this->call(ManualesSeeder::class);
        $this->call(HiselemSeeder::class);
        $this->call(CupsSeeder::class);
        $this->call(TarifasSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
