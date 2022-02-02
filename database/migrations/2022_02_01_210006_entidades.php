<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Entidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contactos_entidades', function (Blueprint $table) {
        $table->bigIncrements('idcontactos_entidades');
        $table->string('empresa', 192);
        $table->string('contacto', 192);
        $table->string('telefono', 192);
        $table->integer('id_ciudad')->default(4080);
        $table->string('correo', 192);
        $table->boolean('activo')->default('1');
        $table->unsignedBigInteger('sede_id');
        $table->foreign('sede_id', 'id_sede_entidades')->references('id')->on('sedes')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('contactos_entidades');

    }
}