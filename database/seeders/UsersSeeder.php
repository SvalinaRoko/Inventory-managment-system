<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Luka',
            'surname' => 'Batarelo',
            'email' => 'l.b@gmail.com',
            'is_registered' => true,
            'password' => bcrypt(1234),
            'role' => 'admin'
        ]);
    }
}
