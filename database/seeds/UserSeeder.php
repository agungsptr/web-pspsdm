<?php

use Illuminate\Database\Seeder;
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
        $user = new User;
        $user->name = "root";
        $user->username = "root";
        $user->password = \Hash::make("YJ`/3qas2]MkQ9T&");
        $user->save();
    }
}
