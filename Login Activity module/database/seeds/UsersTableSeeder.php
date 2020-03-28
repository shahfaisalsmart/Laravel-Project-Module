<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$IvTqC9imgJjhy2KzlHeTUe9O9gP2xvknCw7/PnbVhNDgBJdZSydFK',
            'remember_token' => null,
            'created_at'     => '2020-02-02 08:40:35',
            'updated_at'     => '2020-02-03 08:40:35',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
