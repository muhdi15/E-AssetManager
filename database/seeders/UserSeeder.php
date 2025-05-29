<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            'name' => 'Fajri',
            'email' => 'fajri@email.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'status' => 'active'

        ]);

        DB::table('users')->insert([

            'name' => 'user',
            'email' => 'user@email.com',
            'password' => Hash::make('12345678'),
            'role' => 'user',
            'status' => 'pending'

        ]);

        DB::table('users')->insert([

            'name' => 'user',
            'email' => 'user@email.com',
            'password' => Hash::make('12345678'),
            'role' => 'user',
            'status' => 'pending'

        ]);
        
    }
}
