<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersetujuanBooking extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persetujuan_booking')->insert([
            [
                'booking_id' => 1, // ID dari data peminjaman
                'approver_id' => 2, // ID dari Approver User
                'level_status_persetujuan' => '0', // Belum disetujui
                'catatan' => 'Persetujuan level 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data persetujuan lainnya
        ]);
    }
}
