<?php

namespace App\Controllers;

use CodeIgniter\Database\Exceptions\DatabaseException;

class Home extends BaseController
{
    public function index(): string
    {
        try {
            $db = \Config\Database::connect();

            // Vérifie si la connexion a réussi
            if ($db->connID) {
                return view('login');
            } else {
                // Affiche une erreur personnalisée
                return 'Échec de la connexion à la base de données. Vérifiez les paramètres de connexion.';
            }
        } catch (DatabaseException $e) {
            // Affiche les détails de l'erreur
            return 'Une erreur est survenue : ' . $e->getMessage();
        } catch (\Exception $e) {
            // Gère d'autres exceptions
            return 'Une erreur inattendue est survenue : ' . $e->getMessage();
        }
    }

    public function welcome(): string
    {
        return view('welcome_message');
    }
}
