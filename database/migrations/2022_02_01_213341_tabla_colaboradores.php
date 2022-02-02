<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaColaboradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
   // $table->bigIncrements('id');
    $table->unsignedBigInteger('id_persona');
    $table->foreign('id_persona', 'id_persona_colaborador')->references('id')->on('personas')->onDelete('restrict')->onUpdate('restrict');
    $table->unsignedBigInteger('id_departamento');
    $table->foreign('id_departamento', 'id_departamento_colaborador')->references('id')->on('departamentos')->onDelete('restrict')->onUpdate('restrict');
    $table->boolean('activo')->default('1');
    $table->unsignedBigInteger('sede_id')->default('1');
    $table->foreign('sede_id', 'id_sede_colaboradores')->references('id')->on('sedes')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('colaboradores');

    }
}