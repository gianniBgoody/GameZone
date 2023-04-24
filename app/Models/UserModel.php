<?php

namespace App\Models;

use CodeIgniter\Model;

//pour l'utilisation de la Rawsql
use CodeIgniter\Database\RawSql;

class UserModel extends Model
{
    protected $table      = 'utilisateur';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['nom', 'prenom', 'pseudo', 'mail', 'password', 'id_role', 'bitValidite'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
    

public function inscriptionUtilisateur($postData){
    $postData['password'] = password_hash($postData['password'],PASSWORD_DEFAULT);
    return $this-> insert($postData);
    
}


//fonction pour la connection et pour vérifier si le mail et le mot de passe sont liés et valide
public function checkUser($postData){
    $mail = $postData['mail'];
    $where = "mail='{$mail}' OR pseudo='{$mail}'";
    $user = $this->where(new RawSql($where))
                 ->get()
                 ->getRowArray();
    if($user && password_verify($postData['password'],$user['password'])){
        return $user;
    }
    else {
        return FALSE;
    }
}

}