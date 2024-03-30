<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaludManuale;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ManualesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salud_manuales')->delete();
        $json = File::get('database/json/manual.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            SaludManuale::create(array(
                'manual'=> $obj->manual,
                'nombre'=> $obj->nombre,
            ));
        }
    }
}
