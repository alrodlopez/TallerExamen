<?php

/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 21-04-17
 * Time: 08:56 AM
 */
use App\Providers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidersSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('providers')->delete();
        Providers::create([
            'name' => "Ardus"
        ]);
    }

}