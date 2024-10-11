<?php

namespace App\Controllers;

use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index(): string
    {
        try {
            $db = \Config\Database::connect();
            if ($db->connID) {
                return view('login');
            } else {
                return 'Échec de la connexion à la base de données.';
            }
        } catch (DatabaseException $e) {
            return 'Erreur de connexion à la base de données : ' . $e->getMessage();
        } catch (\Exception $e) {
            return 'Une erreur est survenue : ' . $e->getMessage();
        }
    }

    public function welcome(): string
    {
        return view('welcome_message');
    }
}
