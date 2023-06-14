<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanactionModel;

class PAAdmin extends BaseController
{
    public function index()
    {
        $modelplan = new PlanactionModel();


        $session = session();

        if (empty($session->get('nom')) ) {
            $mess = true;
            return view('connexion.php',['mess' => $mess]);
        } else {
            
            $allplan = $modelplan->findAll();   
            // var_dump($allplan);
            return view('admin/planactions.php',['plans' => $allplan]);
        }

    }
}