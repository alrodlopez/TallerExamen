<?php

/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 21-04-17
 * Time: 08:15 AM
 */
use App\PromotionsTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionsTypesSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('promotions_types')->delete();
        PromotionsTypes::create([
            'name' => "Arduino",
            'description' => "prueba"
        ]);
    }

}