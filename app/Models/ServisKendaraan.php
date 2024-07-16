<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServisKendaraan extends Model
{
    use HasFactory;

    protected $table = 'servis_kendaraan';

    protected $fillable = [
        'id_kendaraan',
        'id_user',
        'tanggal_servis',
        'deskripsi',
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
