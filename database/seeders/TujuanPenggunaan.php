<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TujuanPenggunaan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('TujuanPenggunanan')->insert([
            [
                'id_kendaraan' => 1, // ID dari Kendaraan A
                'id_user' => 1, // ID dari Admin User
                'tujuan_penggunaan' => 'Dinas Luar Kota',
                'tanggal_penggunaan' => '2024-07-15',
                'tanggal_pengembalian' => '2024-07-16',
                'catatan' => 'Tidak ada',
                'mileage' => '200km',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data tujuan penggunaan lainnya
        ]);
    }
}
