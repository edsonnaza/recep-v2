<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class TablaProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        $proveedores = [
            array('id' => '1', 'nombre_profesion' => 'Arquitecto/a', 'sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '2', 'nombre_profesion' => 'Contador/a', 'sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '3', 'nombre_profesion' => 'Ingeniero/a', 'sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '4', 'nombre_profesion' => 'Tecnico/a', 'sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '5', 'nombre_profesion' => 'Médico', 'sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '6', 'nombre_profesion' => 'Otros', 'sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),

        ];
        DB::table('proveedores')->insert($proveedores);

    }
}
