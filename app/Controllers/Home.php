<?php

namespace App\Controllers;

class Home extends BaseController
    {
    public function index(): string
        {
            
            // $mysqli = new \mysqli('192.168.1.177', 'marlon2025c', 'Spazia2025!!', 'Spazia');

            // if ($mysqli->connect_error) {
            //     die('Erreur de connexion MySQLi : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
            // }

            // echo 'Connexion réussie avec MySQLi dans CodeIgniter';
            $db = \Config\Database::connect();
            if ($db->connID) {
                echo 'Connexion réussie via Config\Database::connect()';
            } else {
                $error = $db->error();
                echo 'Erreur lors de la connexion: ' . $error['message'] ?? 'Erreur inconnue';
            }
            return view('login');
        }

    public function welcome(): string
        {
            return view('welcome_message');
        }
     }