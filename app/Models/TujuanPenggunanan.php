<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TujuanPenggunanan extends Model
{
    use HasFactory;

    protected $table = 'TujuanPenggunanan';

    protected $fillable = [
        'id_kendaraan',
        'id_user',
        'tujuan_penggunaan',
        'tanggal_penggunaan',
        'tanggal_pengembalian',
        'catatan',
        'mileage',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(DataKendaraan::class, 'id_kendaraan');
    }

    public function user()
    {
        return $this->belongsTo(DetailUser::class, 'id_user');
    }
}
