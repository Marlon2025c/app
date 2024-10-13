<?php

namespace App\Controllers;

class Home extends BaseController
    {
    public function index(): string
        {
            $db = \Config\Database::connect();
            $db->connID;
            print $db;
            return view('login');
        }

    public function welcome(): string
        {
            return view('welcome_message');
        }
     }