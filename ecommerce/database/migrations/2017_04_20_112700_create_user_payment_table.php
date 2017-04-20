<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_payment',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->integer("user_id")->unsigned();
            $tabla->foreign("user_id")->references("id")->on("users");
            $tabla->integer("payment_type_id")->unsigned();
            $tabla->foreign("payment_type_id")->references("idPayType")->on("payment_types");
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
        Schema::drop('user_payment');

    }
}
