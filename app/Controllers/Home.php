<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        // Exécution de la requête pour récupérer les utilisateurs
        $results = $userModel->findAll();

        // Vérification si la requête a échoué
        if ($results === false) {
            // Affiche l'erreur SQL
            $dbError = $this->db->error();
            echo 'Erreur SQL : ' . $dbError['message'];
            return;
        }

        // Si tout est OK, assigner les données récupérées
        $data['users'] = $results;

        // Retourner la vue
        return view('users/index', $data);
    }
}
