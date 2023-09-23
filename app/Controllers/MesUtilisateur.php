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
            
            $users = $modelplan->findAll();   
            // var_dump($users);

            return view('admin/utilisateurs.php',['users' => $users,'session' => $session]);
        }
    }

    public function aff_form()
    {
        $session = session();

        if (empty($session->get('nom')) ) {
            $mess = true;
            return view('connexion.php',['mess' => $mess]);
        } else {
            return view('add_user.php',['session' => $session]);
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
            "role" => $this->request->getVar("role"),
            "apps" => $this->request->getVar("apps"),
        ];

        $modelplan = new Utilisateur();

        $modelplan -> insert($data);

        return redirect()->to('Utilisateur');

    }

    public function delete_user()
    {
        $session = session();

        $idUser = $this->request->getVar("id");

        $userModel = new Utilisateur();
        
        $userModel->delete($idUser);
        
        return redirect()->to('Utilisateur');

    }

    function affUserModif() {
        $session = session();
        
        $userModel = new Utilisateur();

        $idUser = $this->request->getVar("id");

        $user = $userModel->find($idUser);

        return view('modify_user.php',['user'=>$user, 'session' => $session]);
    }

    function modifUser() {
        $session = session();
        
        $userModel = new Utilisateur();

        $idUser = $this->request->getVar("id");

        $newdata = [
            'nom'=> $this->request->getVar("nom"),
            'prenom'=> $this->request->getVar("prenom"),
            'email'=> $this->request->getVar("email"),
            'mdp'=> $this->request->getVar("mdp"),
            'apps'=> $this->request->getVar("apps"),
            'role'=> $this->request->getVar("role"),
        ];
        
        $userModel->update($idUser,$newdata);

        return redirect()->to('Utilisateur');
    }

}
?>

