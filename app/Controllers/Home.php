<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanactionModel;

class Home extends BaseController
{
    public function index()
    {
        $modelplan = new PlanactionModel();

        //insert
        // $donnes = ['mois'=>'avril'];
        // $modelplan -> insert($donnes);

        //findall
        // $allplan = $modelplan->findall();
        // var_dump($allplan);

        $session = session();

        if (empty($session->get('nom')) ) {
            
            $mess = true;
            return view('connexion.php',['mess' => $mess]);
        } else {
            if ($session->get('email')=="admin" & $session->get('mdp')=="mdptest") {                
                return view('admin/index.php');
            } else {                
                return view('welcome_message.php',['session' => $session]);
            }
        }

        // $session->set('name', 'John Doe');
        // $name = $session->get('name');
        // echo $name;
        
        
    }
}
