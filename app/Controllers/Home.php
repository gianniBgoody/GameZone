<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }


    public function setUp(){

        helper('form');
        // dataOpenModal a false. pour le modal. rien ne se passe si on ne click pas dessus
        $data['openModal'] = false;

        $data['header'] = [
            'meta_title' => 'Game Zone Le Blog | Page d\'accueil',
            'title' => 'Page d\'accueil'
        ];

        $postData = $this->request->getPost();
        if($postData){

            $validation = \config\Services::validation();
            $rules = $validation->getRuleGroup('connectionRules');

            if($this->validate($rules)){
                
                $userModel = new \App\Models\UserModel();

                //fonction checkUser se trouve dans dossier UtilisateurModel. 
                $user = $userModel->checkUser($postData);

                //Vérifier si c'est bien le bon duo login/mdp
                if($user){                    
                    $this->session->set('user',$user);
                    $_SESSION['connexionOk'] = 'Bienvenue '.$this->session->get('user')['pseudo'];
                    $this->session->markAsFlashdata('connexionOk');
                    if($this->session->get('user')['id_role'] == 2){
                        return redirect()->to('Admin');
                    }
                    return redirect()->to('Noob');
                }
                // pourle modal mettre la valeur true si il y a une erreur
                $data['openModal'] = true;

                $data['notMatching'] = 'Pas de correspondance';
            }else{
                //pour le modal. valeur a True si il y a des erreur de validation
                $data['openModal'] = true;

                $data['validation'] = $this->validator;
            }
        }
    
        
        return view ('templates/pageAccueil', $data);
    }


    public function inscription(){

        helper(['form', 'nettoyageData']);
        $data['openModal'] = false;
        
        $data['header'] = [
            'meta_title' => 'Game Zone s\'inscrire',
            'title' => 'Page d\'inscription'
        ];

        //traitement validation, insertion en bdd etc....
        if($this->request->getPost()){
            //valid_data fait référence à NettoyageData_helper
            $postData = valid_data($this->request->getPost());
            //autre façon d'écrire pour ne pas répéter la ligne
            // $postData = valid_data($postData);
            // appel des règles de validations 
            $validation = \config\Services::validation();
            $rules = $validation->getRuleGroup('inscriptionRules');

            if($this->validate($rules)){
                //on insère les données saisies en BBD
                $userModel = new \App\Models\UserModel();
                //autre façon d'écrire
                // userModel = model('App\Models\UserModel');
                $userModel ->inscriptionUtilisateur($postData);

                $_SESSION['inscriptionOk'] = 'C\'est bon! Votre compte a bien été crée. Vous pouvez vous ';
                $this->session->markAsFlashdata('inscriptionOk');
                
               return redirect()->route('Start');

            }else{
                $data['validation'] = $this->validator;

            }
        }

        return view('templates/pageInscription',$data);
       
    }
}