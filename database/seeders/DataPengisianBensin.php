<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPengisianBensin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_pengisian_bensin')->insert([
            [
                'id_kendaraan' => 1, // ID dari Kendaraan A
                'id_user' => 1, // ID dari Admin User
                'tanggal_pengisian' => '2024-07-15',
                'jumlah_bensin' => '50L',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data pengisian bensin lainnya
        ]);
    }
}
