<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class region extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('region')->insert([
            [
                'region_name' => 'Region 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data region lainnya
        ]);
    }
}
