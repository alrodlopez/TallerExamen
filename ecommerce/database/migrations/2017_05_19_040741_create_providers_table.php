<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->String("name");
            $tabla->String("contact_name");
            $tabla->String("address");
            $tabla->String("city");
            $tabla->String("phone");
            $tabla->integer("provider_type_id")->unsigned();
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
        Schema::drop('providers');
    }
}
