<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('Password'),
            'role_id'  => 2,
        ]);

        User::create([
            'name'     => 'User',
            'email'    => 'user@user.com',
            'password' => bcrypt('Password'),
            'role_id'  => 1,
        ]);
    }
}
