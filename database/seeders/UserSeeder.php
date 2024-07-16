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
        DB::table('detail_user')->insert([
            [
                'nama' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => '1', // Admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Approver User',
                'email' => 'approver@example.com',
                'password' => Hash::make('password'),
                'role' => '0', // Approver
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
