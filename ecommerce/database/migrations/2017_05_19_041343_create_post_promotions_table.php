<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_products',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->decimal("price",9,2);
            $tabla->integer("post_id")->unsigned();
            $tabla->foreign("post_id")->references("id")->on("posts");
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
        Schema::drop('post_products');

    }
}
