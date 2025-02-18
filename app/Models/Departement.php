<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $table = 'departement';

    protected $fillable = [
        'departement_name',
        'id_region',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region');
    }
}