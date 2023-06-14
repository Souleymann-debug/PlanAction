<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Utilisateur;

class MesUtilisateur extends BaseController
{
    public function index()
    {
        $modelplan = new Utilisateur();

        $session = session();

        if (empty($session->get('nom')) ) {
            $mess = true;
            return view('connexion.php',['mess' => $mess]);
        } else {
            
            $allplan = $modelplan->findAll();   
            // var_dump($allplan);
            return view('admin/utilisateurs.php',['plans' => $allplan]);
        }
    }

    public function aff_form()
    {
        $session = session();

        if (empty($session->get('nom')) ) {
            $mess = true;
            return view('connexion.php',['mess' => $mess]);
        } else {
            return view('admin/ajouteruser.php');
        }
    }

    public function create()
    {
        $session = session();
        
        
        $data = [
            "nom" => $this->request->getVar("nom"),
            "prenom" => $this->request->getVar("prenom"),
            "email" => $this->request->getVar("email"),
            "mdp" => $this->request->getVar("mdp"),
            "apps" => $this->request->getVar("apps"),
        ];

        $modelplan = new Utilisateur();

        $modelplan -> insert($data);

        return view('admin/validationajoutplanadmin.php');
    }
}
?>

