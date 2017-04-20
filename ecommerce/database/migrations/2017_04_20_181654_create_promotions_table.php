<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('promotions',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->integer("promotion_type_id")->unsigned();
            $tabla->foreign("promotion_type_id")->references("id")->on("promotions_types");
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
        Schema::drop('promotions');
    }
}
