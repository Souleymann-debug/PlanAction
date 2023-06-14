<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanactionModel;

class AjouterPlanAction extends BaseController
{
    public function index()
    {
        $session = session();

        if (empty($session->get('nom')) ) {
            $mess = true;
            return view('connexion.php',['mess' => $mess]);
        } else {
            return view('ajouterplanaction.php',['session' => $session]);
        }

        
    }

    public function create()
    {
        $session = session();


        $data = [
            "jour" => $this->request->getVar("jour"),
            "mois" => $this->request->getVar("mois"),
            "annee" => $this->request->getVar("annee"),
            "apps" => $session->get('apps'),
            "responsable" => $session->get('nom')." ".$session->get('prenom'),
            "designation" => $this->request->getVar("designation"),
            "pourqui" => $this->request->getVar("pourqui"),
            "lieu" => $this->request->getVar("lieu"),
            "nbbeneficiaire" => $this->request->getVar("nbbeneficiaire"),
            "budgetvise" => $this->request->getVar("budgetvise"),
            "statut" =>"En attente",
        ];

        $modelplan = new PlanactionModel();

        $modelplan -> insert($data);

        return view('validationajoutplan.php',['session' => $session]);
    }

}
