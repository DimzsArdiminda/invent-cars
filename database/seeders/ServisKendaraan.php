<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServisKendaraan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servis_kendaraan')->insert([
            [
                'id_kendaraan' => 1, // ID dari Kendaraan A
                'id_user' => 1, // ID dari Admin User
                'tanggal_servis' => '2024-07-15',
                'deskripsi' => 'Servis rutin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data servis kendaraan lainnya
        ]);
    }
}
