<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        // Récupérer tous les utilisateurs
        $data['users'] = $userModel->findAll();

        // Charger une vue avec les données récupérées
        return view('users/index', $data);
    }

    public function getUser($id): string
    {
        $userModel = new UserModel();

        // Récupérer un utilisateur spécifique par son ID
        $data['user'] = $userModel->find($id);

        // Charger une vue ou traiter les données
        return view('users/detail', $data);
    }
}


##  namespace App\Controllers;

## use CodeIgniter\Database\Exceptions\DatabaseException;

## class Home extends BaseController
## {
   ##  public function index(): string
    ## {
       ##  $db = \Config\Database::connect();
        ## $db->connID;
        ## return view('login');
    ## }

    ## public function welcome(): string
    ## {
        ## return view('welcome_message');
    ## }
## }