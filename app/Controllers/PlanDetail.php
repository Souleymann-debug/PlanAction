<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanactionModel;
use App\Models\FichierModel;

class PlanDetail extends BaseController
{
    public function index() {
        $modelplan = new PlanactionModel();
        $fichiermodel = new FichierModel();

        $session = session();

        $plandetail = $modelplan->find($this->request->getVar('id'));

        $fichiers = $fichiermodel->where('id_planaction',$this->request->getVar('id'))->findAll();

        return view('detail_plan.php',['plandetail'=>$plandetail, 'session' => $session, 'images' => $fichiers]);
    }
}