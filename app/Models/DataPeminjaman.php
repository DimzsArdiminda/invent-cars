<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeminjaman extends Model
{
    use HasFactory;

    protected $table = 'data_peminjaman';

    protected $fillable = [
        'id_approver',
        'id_user',
        'id_kendaraan',
        'driver',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'status_peminjaman',
        'status_pengembalian',
    ];

    public function approver()
    {
        return $this->belongsTo(DetailUser::class, 'id_approver');
    }

    public function user()
    {
        return $this->belongsTo(DetailUser::class, 'id_user');
    }

    public function kendaraan()
    {
        return $this->belongsTo(DataKendaraan::class, 'id_kendaraan');
    }
}
