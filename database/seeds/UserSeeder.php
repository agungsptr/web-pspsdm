<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

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
        $user->id = 1;
        $user->name = "root";
        $user->username = "root";
        $user->password = Hash::make("1234567890");
        // $user->password = \Hash::make("YJ`/3qas2]MkQ9T&");
        $user->save();
    }
}
