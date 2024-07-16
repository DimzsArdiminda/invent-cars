<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departemen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departement')->insert([
            [
                'departement_name' => 'Departemen 1',
                'id_region' => 1, // ID dari Region 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data departemen lainnya
        ]);
    }
}
