<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory(1000)->create();

        $user = User::first();
        $user->role_id = 1;
        $user->name = 'Administrator';
        $user->email = 'admin@gmail.com';
        $user->save();
    }
}
