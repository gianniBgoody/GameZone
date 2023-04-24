<?php

namespace App\Models;

use CodeIgniter\Model;

class JeuModel extends Model
{
    protected $table      = 'jeu';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['nom_jeu', 'description', 'image', 'url_officielle'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
    

    public function addJeux ($postData){

        $this-> insert($postData);
        $idJeu =  $this->db->insertID();

        foreach($postData['genres'] as $idGenre){
            $insert = array(
                'id_genre' => $idGenre,
                'id_jeu'   => $idJeu
            );
            $this->db->table('jeu_genre')
                     ->insert($insert);
        }
        
        foreach($postData['plateformes'] as $idPlateforme){
            $insert = array(
                'id_plateforme' => $idPlateforme,
                'id_jeu'   => $idJeu
            );
            $this->db->table('jeu_plateforme')
                     ->insert($insert);
        }
    }
   
}