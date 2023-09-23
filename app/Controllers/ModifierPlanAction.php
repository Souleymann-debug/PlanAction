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

        return view('modify_plan.php',['planaction'=>$planaction,'images'=>$images,'session' => $session]);
    }

    public function modify()
    {
        $session = session();

        $fichiermodel = new FichierModel();

        $id_planaction = $this->request->getVar("id");

        $request = service('request');

        $fichiers = $request->getFiles();

        foreach ($fichiers['image'] as $file) {
            if ($file->isValid() && !$file->hasMoved()) {

                echo $file->getName() . "<br>";

                $imageName = $file->getRandomName();
                $file->move('uploads/',$imageName);

                $data = [
                    "chemin" => $imageName,
                    "id_planaction" => $id_planaction
                ];
    
                $fichiermodel->save($data);

            }
        }

        // if (isset($fichiers['image']) && $fichiers['image']->isValid()) {
        //     $fichiermodel = new FichierModel();
    
        //     $fichier = $this->request->getFile("image");
    
        //     $imageName = $fichier->getRandomName();
        //     $fichier->move('uploads/',$imageName);
    
        //     $data = [
        //         "chemin" => $imageName,
        //         "id_planaction" => $id_planaction
        //     ];
    
        //     $fichiermodel->save($data);
        // }

        $newdata = [
            'date'=> $this->request->getVar("date"),
            'designation'=> $this->request->getVar("designation"),
            'pourqui'=> $this->request->getVar("pourqui"),
            'lieu'=> $this->request->getVar("lieu"),
            'nbbeneficiaire'=> $this->request->getVar("nbbeneficiaire"),
            'budgetvise'=> $this->request->getVar("budgetvise"),
            'budgetrealise'=> $this->request->getVar("budgetrealise"),
            'nbbeneficaireatteint' => $this->request->getVar("nbbeneficiaireatteint"),
            'statut' => $this->request->getVar("statut"),
            'datephoto' => $this->request->getVar("datephoto"),
            'personnephoto' => $this->request->getVar("personnephoto"),
        ];
        $modelplan = new PlanactionModel();
        $modelplan->update($this->request->getVar("id"),$newdata);

        return redirect()->to('MesPlanAction');
        
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
        
        return redirect()->to('MesPlanAction');

    }

}

?>