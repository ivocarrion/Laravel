<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Factory;

use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory('App\User',1)->create();
    }
}
