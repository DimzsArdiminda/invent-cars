<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKendaraan extends Model
{
    use HasFactory;

    protected $table = 'data_kendaraan';

    protected $fillable = [
        'nama_kendaraan',
        'plat_nomor',
        'jenis_kendaraan',
        'kepemilikan',
        'status',
        'jadwal_servis',
        'riwayat_pemakaian_kendaraan',
        'konsumsi_BBM',
    ];
}
