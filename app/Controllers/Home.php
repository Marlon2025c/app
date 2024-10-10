<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();
        if ($db->connID) {
            return view('login');
        } else {
            return 'Échec de la connexion à la base de données.';
        }
    }

    function welcome(): string
    {
        return view('welcome_message');
    }
}
