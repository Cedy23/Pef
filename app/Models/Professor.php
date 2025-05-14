<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Utiliser Authenticatable
use Illuminate\Notifications\Notifiable;

class Professor extends Authenticatable
{
    use Notifiable;

    // Autoriser l'attribution de masse pour les champs spécifiés
    protected $fillable = [
        'name', // Nom du professeur
        'prenom', // Prénom
        'email', // Adresse e-mail
        'password', // Mot de passe
    ];

    // Si vous utilisez des champs cachés comme le mot de passe
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
