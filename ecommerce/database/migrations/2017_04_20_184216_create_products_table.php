<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->string("name");
            $tabla->text("description");
            $tabla->integer("product_type_id")->unsigned();
            $tabla->foreign("product_type_id")->references("id")->on("product_types");
            $tabla->integer("provider_id")->unsigned();
            $tabla->foreign("provider_id")->references("id")->on("providers");
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
        Schema::drop('products');
    }
}
