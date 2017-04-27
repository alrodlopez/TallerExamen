<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('susers',function (Blueprint $tabla){
        $tabla->increments("idUser");
        $tabla->integer("Age");
        $tabla->string("First_Name");
        $tabla->string("Last_Name");
        $tabla->string("Login_Name");
        $tabla->string("Login_Password");
        $tabla->integer("Phone_Number");
        $tabla->string("Email");
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
        Schema::dropIfExists('susers');
    }
}
