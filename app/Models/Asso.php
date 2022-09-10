<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidat;
use App\Models\Utilisateur;

class Asso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'leader',
        'adresse',
    ];

    public function candidats()
    {
        return $this->hasMany(Candidat::class, 'asso_id');
    }

    public function utilisateurs()
    {
        return $this->hasMany(Utilisateur::class, 'user_id');
    }

    public function admins()
    {
        return $this->hasMany(Admin::class, 'user_id');
    }
}
