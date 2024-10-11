<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        try {
            $db = \Config\Database::connect();
            
            // Vérifier la connexion
            if ($db->connID) {
                return view('login');
            } else {
                // Obtenir l'erreur de la connexion si échouée
                $error = $db->error();
                return 'Échec de la connexion à la base de données : ' . $error['message'];
            }
        } catch (\Exception $e) {
            // Afficher les détails de l'erreur capturée
            return 'Erreur de connexion à la base de données : ' . $e->getMessage();
        }
    }

    function welcome(): string
    {
        return view('welcome_message');
    }
}
