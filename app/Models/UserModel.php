<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nom de la table dans la base de données
    protected $primaryKey = 'id'; // Clé primaire de la table

    // Colonnes que tu veux pouvoir manipuler
    protected $allowedFields = ['username', 'email', 'password'];

    // Si tu veux utiliser les dates automatiques (created_at, updated_at)
    protected $useTimestamps = true;
}
