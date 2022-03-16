<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaRecep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recep', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('id_dpto');
        $table->foreign('id_dpto', 'id_dpto_recep')->references('id')->on('departamentos')->onDelete('restrict')->onUpdate('restrict');
        $table->unsignedBigInteger('id_visitante');
        $table->foreign('id_visitante', 'id_visitante_recep')->references('id')->on('personas')->onDelete('restrict')->onUpdate('restrict');
        $table->string('empresa_origen',192);
        $table->string('nombre_visitante',192);
        $table->string('comentario_visitante',254)->nullable;
        $table->string('motivo',192);
        $table->unsignedBigInteger('id_motivo');
        $table->foreign('id_motivo', 'id_motivo_recep')->references('id')->on('motivos')->onDelete('restrict')->onUpdate('restrict');
        $table->string('situacion',50)->default("EN ESPERA");
        $table->unsignedBigInteger('id_colaborador')->nullable;
        $table->foreign('id_colaborador', 'id_colaborador_recep')->references('id')->on('personas')->onDelete('restrict')->onUpdate('restrict');
        $table->string('nombre_colaborador',192)->nullable;
        $table->string('comentario_colaborador',254)->nullable;
        $table->unsignedBigInteger('id_colaborador_atencion')->nullable;
        $table->foreign('id_colaborador_atencion', 'id_colaborador_atencion_recep')->references('id')->on('personas')->onDelete('restrict')->onUpdate('restrict');
        $table->datetime('hora_atencion')->nullable;
        $table->string('eliminado',2)->default('NO');
        $table->unsignedBigInteger('sede_id');
        $table->foreign('sede_id', 'id_sede_recep')->references('id')->on('sedes')->onDelete('restrict')->onUpdate('restrict');
        $table->timestamps();
        $table->charset = 'utf8mb4';
        $table->collation = 'utf8mb4_spanish_ci';
   });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('recep');
    }
}
