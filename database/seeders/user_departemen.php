<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user_departemen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_departement')->insert([
            [
                'id_user' => 1, // ID dari Admin User
                'id_departement' => 1, // ID dari Departemen 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data user departement lainnya
        ]);
    }
}
