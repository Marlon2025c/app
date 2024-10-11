<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;

class Home extends BaseController
{
    public function index(): string
    {
        try {
            $db = \Config\Database::connect();
            if ($db->connID) {
                return view('login');
            } else {
                // Si la connexion échoue, affiche les informations d'erreur détaillées
                return 'Échec de la connexion à la base de données. Erreur : ' . $db->error()['message'];
            }
        } catch (DatabaseException $e) {
            // Capture les exceptions spécifiques à la base de données
            return 'Erreur de connexion à la base de données : ' . $e->getMessage();
        } catch (\Exception $e) {
            // Capture les autres exceptions
            return 'Une erreur est survenue : ' . $e->getMessage();
        }
    }

    public function welcome(): string
    {
        return view('welcome_message');
    }
}
