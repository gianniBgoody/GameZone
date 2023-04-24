<?php

namespace App\Models;

use CodeIgniter\Model;

class PlateformeModel extends Model
{
    protected $table      = 'plateforme';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['nom_plateforme'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public function getPlateforme(){
        $query = $this -> select('nom_plateforme')->select('id')
                       -> get()
                       -> getResultArray();

        return $query;
    }
}