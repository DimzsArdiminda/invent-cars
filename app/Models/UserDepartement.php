<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDepartement extends Model
{
    use HasFactory;

    protected $table = 'user_departement';

    protected $fillable = [
        'id_user',
        'id_departement',
    ];

    public function user()
    {
        return $this->belongsTo(DetailUser::class, 'id_user');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'id_departement');
    }
}
