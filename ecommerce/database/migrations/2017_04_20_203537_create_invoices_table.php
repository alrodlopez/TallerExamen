<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('invoices',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->dateTime("date");
            $tabla->text("details");
            $tabla->integer("order_id")->unsigned();
            $tabla->foreign("order_id")->references("id")->on("orders");
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
        Schema::drop('invoices');
    }
}
