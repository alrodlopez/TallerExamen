<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_promotions',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->integer("promotion_id")->unsigned();
            $tabla->foreign("promotion_id")->references("id")->on("promotions");
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
        Schema::drop('product_promotions');
    }
}
