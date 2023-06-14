<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanactionModel;
use App\Models\FichierModel;

class ModifierPlanAction extends BaseController
{
    public function index()
    {   
        $session = session();

        $modelplan = new PlanactionModel();
        $fichiermodel = new FichierModel();

        $planaction = $modelplan->find($this->request->getVar('id'));
        $images = $fichiermodel->where('id_planaction',$this->request->getVar('id'))->findAll();

        return view('modifierplanaction.php',['planaction'=>$planaction,'images'=>$images,'session' => $session]);
    }

    public function modify()
    {
        $session = session();

        $id_planaction = $this->request->getVar("id");

        $request = service('request');

        $fichiers = $request->getFiles();

        if (isset($fichiers['image']) && $fichiers['image']->isValid()) {
            $fichiermodel = new FichierModel();
    
            $fichier = $this->request->getFile("image");
    
            $imageName = $fichier->getRandomName();
            $fichier->move('uploads/',$imageName);
    
            $data = [
                "chemin" => $imageName,
                "id_planaction" => $id_planaction
            ];
    
            $fichiermodel->save($data);
        }
        


        $newdata = [
            'jour'=> $this->request->getVar("jour"),
            'mois'=> $this->request->getVar("mois"),
            'annee'=> $this->request->getVar("annee"),
            'designation'=> $this->request->getVar("designation"),
            'pourqui'=> $this->request->getVar("pourqui"),
            'lieu'=> $this->request->getVar("lieu"),
            'nbbeneficiaire'=> $this->request->getVar("nbbeneficiaire"),
            'budgetvise'=> $this->request->getVar("budgetvise"),
            'budgetrealise'=> $this->request->getVar("budgetrealise"),
            'nbbeneficaireatteint' => $this->request->getVar("nbbeneficaireatteint"),
            'statut' => $this->request->getVar("statut"),
        ];
        $modelplan = new PlanactionModel();
        $modelplan->update($this->request->getVar("id"),$newdata);

        return view('modifierplanaction.php',['success'=>true,'session' => $session]);
        
    }

    public function delete_image()
    {
        $session = session();

        $id_image = $this->request->getVar("id");

        $fichiermodel = new FichierModel();

        $fichiermodel->delete($id_image);

        return view('modifierplanaction.php',['success'=>true,'session' => $session]);
    }

    public function deletePlan()
    {
        $session = session();

        $id_plan = $this->request->getVar("id");

        $planmodel = new PlanactionModel();
        
        $planmodel->delete($id_plan);

        $allplan = $planmodel->myPlanAction($session->get('apps'))->getResult();   
        
        return view('mesplanaction.php',['plans' => $allplan,'session' => $session]);

    }

}

?>