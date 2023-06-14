<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanactionModel;

class PlanDetail extends BaseController
{
    public function index()
    {
        $modelplan = new PlanactionModel();

        $session = session();

        $plandetail = $modelplan->find($this->request->getVar('id'));

        return view('plandetail.php',['plandetail'=>$plandetail, 'session' => $session]);
    }
}