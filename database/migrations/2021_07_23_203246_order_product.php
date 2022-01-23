<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('order_product', function (Blueprint $table) {
        $table->unsignedBigInteger('order_id');
        $table->foreign('order_id')->references('id')->on('orders');
        $table->unsignedBigInteger('product_id');
        $table->foreign('product_id')->references('id')->on('productos');
        $table->double('quantity', 15, 4); 
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('order_product');
    }
}
