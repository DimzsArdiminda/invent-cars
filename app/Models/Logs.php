<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $fillable = [
        'id_user',
        'activity',
    ];

    public function user()
    {
        return $this->belongsTo(DetailUser::class, 'id_user');
    }
}
