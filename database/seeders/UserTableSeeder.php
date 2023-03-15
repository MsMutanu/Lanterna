<?php

namespace Database\Seeders;


//use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin User';
        $user->email = 'admin@lanterna.com';
        $user->password = bcrypt('password');
        $user->save();

        $adminRole = Role::where('name', 'administrator')->first();
        $user->attachRole($adminRole);

    }
}
