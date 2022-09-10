<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asso;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'asso_id',
    ];

    public function asso()
    {
        return $this->belongsTo(Asso::class, 'asso_id');
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
