<?php

/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 21-04-17
 * Time: 09:23 AM
 */
use App\Orders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('orders')->delete();
        Orders::updated([
            'date' => "2017/04/20",
            'details' => "Con blutooth",
            'customer_id' => '1',
            'order_statu_id' => '1'

        ]);
    }

}