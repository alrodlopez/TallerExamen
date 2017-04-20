<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payments',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->dateTime("date");
            $tabla->float("amount");
            $tabla->integer("invoice_id")->unsigned();
            $tabla->foreign("invoice_id")->references("id")->on("invoices");
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
        Schema::drop('payments');
    }
}
