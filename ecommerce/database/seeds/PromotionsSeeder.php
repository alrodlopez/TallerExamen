<?php

/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 21-04-17
 * Time: 08:47 AM
 */
use App\Promotions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionsSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('promotions')->delete();
        Promotions::updated([

            'promotion_type_id' => "4"

        ]);
    }

}