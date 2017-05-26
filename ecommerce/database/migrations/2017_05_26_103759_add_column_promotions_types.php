<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPromotionsTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('promotions_types', function (Blueprint $table) {
            $table->text("fechainicio");
            $table->text("fechafinal");
            $table->text("dream");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promotions_types', function (Blueprint $table) {
            $table->text("fechainicio");
            $table->text("fechafinal");
            $table->text("dream");
            //
        });
    }
}
