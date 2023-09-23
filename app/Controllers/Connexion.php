<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Utilisateur;
use App\Models\PlanactionModel;
use CodeIgniter\Router\Routes;
use App\Controllers\Home;

class Connexion extends BaseController
{
    public function index()
    {

        $mess = true;

        return view('connexion.php',['mess' => $mess]);
    }

    public function connect()
    {
        $routes = service('routes');

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
            $role = $row->role;


            $session = session();
            $session->set('email', $email);
            $session->set('mdp', $mdp);
            $session->set('nom', $nom);
            $session->set('prenom', $prenom);
            $session->set('apps', $apps);
            $session->set('role', $role);

            // echo $prenom." ".$nom;
                         
            $modelplan = new PlanactionModel();

            // if ($session->get('apps')=="") {
            //     $allplan = $modelplan->AllPlanAction()->getResult();  
            // } else {
            //     $allplan = $modelplan->myPlanAction($session->get('apps'))->getResult();  
            // }


            if ($session->get('role')=="Admin") {
                $allplan = $modelplan->AllPlanAction()->getResult();  
            } else {
                if ($session->get('role')=="Président") {
                    $allplan = $modelplan->myPlanAction($session->get('apps'))->getResult();  
                }
            }
            
            
            // var_dump($allplan);
            // return view('mesplanaction.php',['plans' => $allplan,'session' => $session]);
            // return redirect()->route('MesPlanAction::index');
            return redirect()->to('MesPlanAction');
            // echo "jijij";
            

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
