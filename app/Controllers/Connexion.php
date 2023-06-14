<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Utilisateur;
use App\Models\PlanactionModel;

class Connexion extends BaseController
{
    public function index()
    {

        $mess = true;

        return view('connexion.php',['mess' => $mess]);
    }

    public function connect()
    {
        $mess = true;

        $userModel = new Utilisateur();

        $users = $userModel->findAll();

        $result = $userModel->validateLogin($this->request->getVar("email"),$this->request->getVar("mdp"));

        if ($result->getNumRows() == 1) {
            // Les informations de connexion sont valides
            $row = $result->getRow();
            $email = $row->email;
            $mdp = $row->mdp;
            $nom = $row->nom;
            $prenom = $row->prenom;
            $apps = $row->apps;


            $session = session();
            $session->set('email', $email);
            $session->set('mdp', $mdp);
            $session->set('nom', $nom);
            $session->set('prenom', $prenom);
            $session->set('apps', $apps);

            // echo $prenom." ".$nom;
            if ($session->get('email')=="admin@gmail.com" & $session->get('mdp')=="mdptest") {                
                return view('admin/index.php');
            } else {                
                $modelplan = new PlanactionModel();

                if ($session->get('apps')=="") {
                    $allplan = $modelplan->AllPlanAction()->getResult();  
                } else {
                    $allplan = $modelplan->myPlanAction($session->get('apps'))->getResult();  
                }
                
                // var_dump($allplan);
                return view('mesplanaction.php',['plans' => $allplan,'session' => $session]);
            }

        } else {
            // Les informations de connexion sont invalides
            $mess = false;

            return view('connexion.php',['mess' => $mess]);
        }


    }

    public function disconnect()
    {
        $session = session();
        $keys = array_keys($session->get());
        $session->remove($keys);  
        $mess = true;
        return view('connexion.php',['mess' => $mess]);
    }
    
}
