<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();
        if ($db->connID) {
            return 'Connexion réussie à la base de données !';
        } else {
            return 'Échec de la connexion à la base de données.';
        }
        return view('login');
    }

    function welcome(): string
    {
        return view('welcome_message');
    }
}
