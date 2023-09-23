<?php

namespace App\Models;

use CodeIgniter\Model;

class PlanactionModel extends Model
{
    protected $table      = 'planaction';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['date','designation','description','nbjour','pourqui','lieu','apps','responsable','budgetvise','nbbeneficiaire',
                                'budgetrealise','nbbeneficaireatteint','statut','datephoto','personnephoto'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function myPlanAction($email) {
        
        $query = $this->db->table('planaction')
            ->where('apps', $email)
            ->where('deleted_at', '0000-00-00 00:00:00')
            ->get();

        return $query;
    }

    public function AllPlanAction() {
        
        $query = $this->db->table('planaction')
            ->where('deleted_at', '0000-00-00 00:00:00')
            ->get();

        return $query;
    }

    
}