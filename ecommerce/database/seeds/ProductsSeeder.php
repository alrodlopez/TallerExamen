<?php

/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 21-04-17
 * Time: 09:12 AM
 */
use App\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('products')->delete();
        Products::updated([
            'name' => "Raspberry",
            'description' => "Con blutooth",
            'product_type_id' => '1',
            'provider_id' => '1'

        ]);
    }

}