<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('permissions',function (Blueprint $tabla){
            $tabla->increments("id");
            $tabla->integer("user_id")->unsigned();
            $tabla->foreign("user_id")->references("id")->on("users");
            $tabla->integer("rol_id")->unsigned();
            $tabla->foreign("rol_id")->references("id")->on("roles");
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
        Schema::drop('permissions');
    }
}
