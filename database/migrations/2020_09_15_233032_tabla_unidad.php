<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaUnidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombre_unidad');
        $table->boolean('activo')->default(true);
        $table->integer('sede_id');
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
        Schema::dropIfExists('unidad');

    }
}
