<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TablaMotivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $now = Carbon::now()->toDateTimeString();
        $motivos = [
            array('id' => '1', 'nombre_motivo' => 'ENTREGA DE DOCUMENTOS', 'sede_id'=>'1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '2', 'nombre_motivo' => 'REUNION COMERCIAL', 'sede_id'=>'1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '3', 'nombre_motivo' => 'RETIRAR DOCUMENTO','sede_id'=>'1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '4', 'nombre_motivo' => 'ENTREVISTA','sede_id'=>'1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '5', 'nombre_motivo' => 'COBRANZA','sede_id'=>'1' ,'created_at' => $now, 'updated_at' => $now),
            array('id' => '6', 'nombre_motivo' => 'OTROS','sede_id'=>'1', 'created_at' => $now, 'updated_at' => $now)
        ];
        DB::table('motivos')->insert($motivos);
    }
}