<?php

namespace App\Models;

    $builder = $this->db->table('users');
    $results = $builder->get();

    if ($results === false) {
        // Affiche l'erreur SQL
        $dbError = $this->db->error();
        echo 'Erreur SQL : ' . $dbError['message'];
        return;
    }

    $data['users'] = $results->getResult();
