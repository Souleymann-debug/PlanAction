<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanactionModel;
use CodeIgniter\Email\EmailTrait;

class AjouterPlanAction extends BaseController
{
    public function index()
    {
        $session = session();

        if (empty($session->get('nom')) ) {
            $mess = true;
            return view('connexion.php',['mess' => $mess]);
        } else {
            return view('add_plan.php',['session' => $session]);
        }

        
    }

    public function create()
    {

        $email = \Config\Services::email();

        $session = session();

        $data = [
            "date" => $this->request->getVar("date"),
            "nbjour" => $this->request->getVar("nbjour"),
            "apps" => $session->get('apps'),
            "responsable" => $session->get('nom')." ".$session->get('prenom'),
            "designation" => $this->request->getVar("designation"),
            "description" => $this->request->getVar("description"),
            "pourqui" => $this->request->getVar("pourqui"),
            "lieu" => $this->request->getVar("lieu"),
            "nbbeneficiaire" => $this->request->getVar("nbbeneficiaire"),
            "budgetvise" => $this->request->getVar("budgetvise"),
            "statut" =>"En attente",
        ];

        $modelplan = new PlanactionModel();

        $modelplan -> insert($data);

        $email->setTo($session->get('email').';harry.gamess@actionpartagepremierssecours.org ');
        $email->setFrom('site@actionpartagepremierssecours.org', 'APPS Notification');
        $email->setSubject('Un plan d\'action a été enregistré');
        $email->setMessage(
            '<h3>'. $this->request->getVar("designation").'<h3>
            <br><br>
            <ol>
                <li> <b>Date : </b>'.$this->request->getVar("designation").'</li>'.
                '<li> <b>APPS : </b>'.$this->request->getVar("designation").'</li>'.
                '<li> <b>Nombre de jours : </b>'.$this->request->getVar("designation").'</li>'.
                '<li> <b>Pour qui ? : </b>'.$this->request->getVar("designation").'</li>'.
                '<li> <b>Budget visé : </b>'.$this->request->getVar("designation").'</li>'.
                '<li> <b>Budget atteint : </b>'.$this->request->getVar("designation").'</li>'.
                '<li> <b>Nombre de bénéficiaires visé : </b>'.$this->request->getVar("designation").'</li>'.
                '<li> <b>Nombre de bénéficiaires : </b>'. $this->request->getVar("designation").'</li>'.
                '<li> <b>Lieu : </b>'. $this->request->getVar("designation").'</li>'.
            '</ol>
            <br><br>
            Merci 
            '
        );


        if ($email->send()) {
            // echo 'E-mail envoyé avec succès.';
        } else {
            // $error = $email->printDebugger();
            // echo $error;
        }


        return view('validationajoutplan.php',['session' => $session]);
    }

}
