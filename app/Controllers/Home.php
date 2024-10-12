<?php

namespace App\Controllers;

use CodeIgniter\Database\Exceptions\DatabaseException;

class Home extends BaseController
    {
    public function index(): string
        {
            $db = \Config\Database::connect();
            $db->connID;
            return view('login');
        }

    public function welcome(): string
        {
            return view('welcome_message');
        }
     }