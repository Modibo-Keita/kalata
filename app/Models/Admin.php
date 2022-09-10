<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "prenom",
        "adresse",
        "email",
        "asso_id",
        "password",
        "user_id",
        "photo"
    ];

    public function asso()
    {
        return $this->belongsTo(Asso::class, 'asso_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
