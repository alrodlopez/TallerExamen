<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->dateTime("date");
            $tabla->text("details");
            $tabla->integer("customer_id")->unsigned();
            $tabla->foreign("customer_id")->references("id")->on("users");
            $tabla->integer("order_statu_id")->unsigned();
            $tabla->foreign("order_statu_id")->references("idStatus")->on("order_status");
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
        Schema::drop('orders');
    }
}
