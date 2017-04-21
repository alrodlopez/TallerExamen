<?php

/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 21-04-17
 * Time: 07:53 AM
 */
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->delete();
        User::create([
            'name' => "Alvaro",
            'email' => "alvaro@gmail.com",
            'password' => "alvaro123"



        ]);
    }

}