<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanactionModel;

class AjouterPAAdmin extends BaseController
{
    public function index()
    {
        $session = session();

        if (empty($session->get('nom')) ) {
            $mess = true;
            return view('connexion.php',['mess' => $mess]);
        } else {
            return view('admin/ajouterPA.php');
        }

        
    }

    public function create()
    {
        $session = session();

        $data = [
            "jour" => $this->request->getVar("jour"),
            "mois" => $this->request->getVar("mois"),
            "annee" => $this->request->getVar("annee"),
            // "apps" => $session->get('apps'),
            "responsable" => "Administrateur",
            "designation" => $this->request->getVar("designation"),
            "pourqui" => $this->request->getVar("pourqui"),
            "lieu" => $this->request->getVar("lieu"),
            "nbbeneficiaire" => $this->request->getVar("nbbeneficiaire"),
            "budgetvise" => $this->request->getVar("budgetvise"),
        ];

        $modelplan = new PlanactionModel();

        $modelplan -> insert($data);

        return view('admin/validationajoutplanadmin.php');
    }

}
