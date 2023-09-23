<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanactionModel;

class MesPlanAction extends BaseController
{
    public function index()
    {
        $modelplan = new PlanactionModel();


        $session = session();
        
        if (empty($session->get('nom')) ) {
            $mess = true;
            return view('connexion.php',['mess' => $mess]);
        } else {
            
            if ($session->get('apps')=="") {
                $allplan = $modelplan->AllPlanAction()->getResult();  
            } else {
                $allplan = $modelplan->myPlanAction($session->get('apps'))->getResult();  
            }
            
            // var_dump($allplan);
            return view('all_plan.php',['plans' => $allplan,'session' => $session]);
        }

    }
}