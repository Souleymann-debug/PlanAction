<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanactionModel;

class ValidationAjoutPlanAction extends BaseController
{
    public function index()
    {
        return view('validationajoutplan.php',['session' => $session]);
    }
}



?>