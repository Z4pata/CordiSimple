<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'david steven medina urrego',
        //     'email' => 'medinastevenurregodavid@gmail.com',
        //     'password' => 'David12345+',
        //     'role_id' => 1
        // ]);

        User::create([
            'name' => 'jhon edwin asprilla',
            'email' => 'asprillajhon73@gmail.com',
            'password' => 'Jhon12345+',
            'role_id' => 1
        ]);

        User::create([
            'name' => 'juan jose zapata',
            'email' => 'zapata.devs@gmail.com',
            'password' => 'Juan12345+',
            'role_id' => 1
        ]);
    }
}
