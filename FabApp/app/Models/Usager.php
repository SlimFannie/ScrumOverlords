<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Usager as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Usager extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'prenom',
        'nom',
        'adresseCourriel',
        'motDePasse'
    ];

    protected $hidden = [
        'motDePasse',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->motDePasse;
    }

    public $timestamps = false;
}
