<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaDepartamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('departamentos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('dpto_nombre', 192);
        $table->string('glyphicon', 192);
        $table->string('class', 192);
        $table->string('orden', 3);
        $table->boolean('activo')->default('1');
        $table->unsignedBigInteger('sede_id');
        $table->foreign('sede_id', 'id_sede_fkdepto')->references('id')->on('sedes')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('departamentos');

    }
}
