<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [[
            'id'         => 1,
            'title'      => 'Admin',
            'created_at' => '2020-02-10 08:40:08',
            'updated_at' => '2020-02-12 08:40:08',
            'deleted_at' => null,
        ],
            [
                'id'         => 2,
                'title'      => 'User',
                'created_at' => '2020-02-18 08:40:08',
                'updated_at' => '2020-02-18 08:40:08',
                'deleted_at' => null,
            ]];

        Role::insert($roles);
    }
}
