<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class logs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('logs')->insert([
            [
                'id_user' => 1, // ID dari Admin User
                'activity' => 'Menambahkan data kendaraan baru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data log lainnya
        ]);
    }
}
