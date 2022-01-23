<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TablaTipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $now = Carbon::now()->toDateTimeString();
        $tipodni = [
            array('id' => '1', 'nombre_tipopersona' => 'Física',  'sede_id'=>'1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '2', 'nombre_tipopersona' => 'Jurídica', 'sede_id'=>'1', 'created_at' => $now, 'updated_at' => $now)
            
        ];
        DB::table('tipo_persona')->insert($tipodni);
    }
}
