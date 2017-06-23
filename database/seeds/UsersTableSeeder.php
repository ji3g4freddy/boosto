<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Superuser',
            'phone' => '0987654321',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'superuser',
        ]);
    }
}
