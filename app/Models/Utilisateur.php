<?php

namespace App\Models;

use CodeIgniter\Model;

class Utilisateur extends Model
{
    protected $table      = 'utilisateur';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['nom','prenom','email','mdp','apps'];

    public function validateLogin($email, $mdp) {
        // Effectuez la vérification des informations de connexion dans la base de données
        // Exemple de requête pour vérifier les informations dans une table "users"
        // $query = $this->db->get_where('utilisateur', array('email' => $email, 'mdp' => $mdp));
        $query = $this->db->table('utilisateur')
            ->where('email', $email)
            ->where('mdp', $mdp)
            ->get();


        return $query;
    }
}
?>