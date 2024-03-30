<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaludCausaext;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class CausaextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salud_causaexts')->delete();
        $json = File::get('database/json/causaexter.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            SaludCausaext::create(array(
                'codigo'=> $obj->codigo,
                'causaext'=> $obj->causaext,
            ));
        }
    }
}
