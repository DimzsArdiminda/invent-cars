<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kendaraan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_kendaraan')->insert([
            [
                'nama_kendaraan' => 'Kendaraan A',
                'plat_nomor' => 'AB123CD',
                'jenis_kendaraan' => '1', // Angkut Orang
                'kepemilikan' => '1', // Milik Sendiri
                'status' => '1', // Available
                'jadwal_servis' => '2024-07-20',
                'riwayat_pemakaian_kendaraan' => 'N/A',
                'konsumsi_BBM' => '10L/100km',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data kendaraan lainnya
        ]);
    }
}
