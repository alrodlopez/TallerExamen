<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('order_products',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->integer("quantity");
            $tabla->integer("post_id")->unsigned();
            $tabla->foreign("post_id")->references("id")->on("posts");
            $tabla->integer("order_id")->unsigned();
            $tabla->foreign("order_id")->references("id")->on("orders");
            $tabla->integer("product_id")->unsigned();
            $tabla->foreign("product_id")->references("id")->on("products");
            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('order_products');
    }
}
