<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengisianBensin extends Model
{
    use HasFactory;

    protected $table = 'data_pengisian_bensin';

    protected $fillable = [
        'id_kendaraan',
        'id_user',
        'tanggal_pengisian',
        'jumlah_bensin',
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
