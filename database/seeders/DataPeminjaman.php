<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPeminjaman extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_peminjaman')->insert([
            [
                'id_approver' => 2, // ID dari Approver User
                'id_user' => 1, // ID dari Admin User
                'id_kendaraan' => 1, // ID dari Kendaraan A
                'driver' => 'Driver A',
                'tanggal_peminjaman' => '2024-07-15',
                'tanggal_pengembalian' => '2024-07-16',
                'status_peminjaman' => '0', // Not Approved
                'status_pengembalian' => '0', // Not Returned
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data peminjaman lainnya
        ]);
    }
}
