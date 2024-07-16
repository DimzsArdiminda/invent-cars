<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersetujuanBooking extends Model
{
    use HasFactory;

    protected $table = 'persetujuan_booking';

    protected $fillable = [
        'booking_id',
        'approver_id',
        'level_status_persetujuan',
        'catatan',
    ];

    public function booking()
    {
        return $this->belongsTo(DataPeminjaman::class, 'booking_id');
    }

    public function approver()
    {
        return $this->belongsTo(DetailUser::class, 'approver_id');
    }
}
