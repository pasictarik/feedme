<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => "tarikp",
            'email' => "tarikpasic112@gmail.com",
            'password' => bcrypt('secret')
        ];

        \App\User::create($user);
    }
}
