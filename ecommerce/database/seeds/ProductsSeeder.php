<?php

/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 21-04-17
 * Time: 09:12 AM
 */
use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('products')->delete();
        Product::updated([
            //'name' => "Ras",
            //'description' => "lñlñlñl",
            //'pricing' => "2",
            //'product_type_id' => '100',
            //'provider_id' => '200'

        ]);
    }

}