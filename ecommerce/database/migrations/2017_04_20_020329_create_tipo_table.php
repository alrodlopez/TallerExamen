<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tipo',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->string('title');
            $tabla->text('description');
            $tabla->decimal('pricing',9,2);
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
        Schema::drop('tipo');
    }
}
