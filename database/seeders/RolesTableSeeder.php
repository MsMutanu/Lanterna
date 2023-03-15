<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'admin', 'display_name' => 'Administrator'],
            ['name' => 'user', 'display_name' => 'User'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}

