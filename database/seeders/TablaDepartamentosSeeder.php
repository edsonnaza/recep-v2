<?php

namespace Database\Seeders;
use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class TablaDepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
            $departamentos = [
            array('id' => '1', 'dpto_nombre' => 'INFORMATICA', 'glyphicon'=>'<i class="fa fa-laptop fa-5x"></i>', 'class'=>'panel panel-primary','orden'=>'9','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '2', 'dpto_nombre' => 'CREDITOS Y COBRANZAS', 'glyphicon'=>'<i class="fa fa-credit-card fa-4x" ></i>', 'class'=>'panel panel-default','orden'=>'4','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '3', 'dpto_nombre' => 'ADMINISTRACION', 'glyphicon'=>'<i class="fa fa-users  fa-5x"></i>', 'class'=>'panel panel-warning','orden'=>'3','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '4', 'dpto_nombre' => 'COMERCIAL GRANOS', 'glyphicon'=>'<i class="fa fa-line-chart fa-5x"></i>', 'class'=>'panel panel-success','orden'=>'2','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '5', 'dpto_nombre' => 'CONTABILIDAD', 'glyphicon'=>'<i class="fa fa-calculator fa-5x"></i>', 'class'=>'panel panel-success','orden'=>'7','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '6', 'dpto_nombre' => 'LOGISTICA INSUMOS', 'glyphicon'=>'<i class="fa fa-truck fa-5x"></i>', 'class'=>'panel panel-warning','orden'=>'5','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '7', 'dpto_nombre' => 'COMERCIAL INSUMOS', 'glyphicon'=>'<i class="fa fa-bar-chart-o fa-5x"></i>', 'class'=>'panel panel-warning','orden'=>'1','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '8', 'dpto_nombre' => 'FINANCIERO', 'glyphicon'=>'<i class="fa fa-university fa-5x"></i>', 'class'=>'panel panel-danger','orden'=>'1','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '9', 'dpto_nombre' => 'COMERCIO EXTERIOR', 'glyphicon'=>'<i class="fa fa-ship fa-5x"></i>', 'class'=>'panel panel-primary','orden'=>'8','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),     
            array('id' => '10', 'dpto_nombre' => 'MATERIALES / OFICINA', 'glyphicon'=>'<i class="fa fa-arrow-down fa-5x"></i>', 'class'=>'panel panel-primary','orden'=>'11','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '11', 'dpto_nombre' => 'OTRAS ATENCIONES', 'glyphicon'=>'<i class="fa fa-info fa-5x"></i>', 'class'=>'panel panel-primary','orden'=>'13','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now), 
            array('id' => '12', 'dpto_nombre' => 'MARKETING', 'glyphicon'=>'<i class="fa fa-lightbulb-o fa-5x"></i>', 'class'=>'panel panel-primary','orden'=>'10','sede_id' => '1', 'created_at' => $now, 'updated_at' => $now),      
        ];  
        DB::table('departamentos')->insert($departamentos);
    }
    
}
