<?php

/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 21-04-17
 * Time: 09:06 AM
 */
use App\ProductTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductTypesSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('product_types')->delete();
        ProductTypes::create([
            'description' => "Componentes"
        ]);
    }
}