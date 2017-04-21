<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 20-04-17
 * Time: 08:52 PM
 */

//namespace database\seeds;
use App\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('roles')->delete();
        Roles::create([
           'name' => "Vendedor"
        ]);
    }

}