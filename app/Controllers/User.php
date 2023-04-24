<?php

namespace App\Controllers;

class User extends BaseController{

    public function ranked()
    {
        helper('form');

        $data['header'] = [
            'meta_title' => 'Game Zone Le Blog | Page de la Communauté',
            'title' => 'Page d\'utilisateur'
        ];


        return view ('templates/pageSession',$data);

        }
 

    public function addGames(){
        helper('form');

        $data['header'] = [
            'meta_title' => 'Game Zone Le Blog | Page de la Communauté',
            'title' => 'Ajouter un jeu'
        ];


        $userModel = model('App\Models\GenreModel');
        $data["genres"] = $userModel->getGenre();
        // die(var_dump($data["genres"]));

        $userModel = model('App\Models\PlateformeModel');
        $data["plateformes"] = $userModel->getPlateforme();
        // die(var_dump($data["plateformes"]));

        if($this->request->getPost()){

            $postData = $this->request->getPost();
            $validation = \config\Services::validation();
            $rules = $validation->getRuleGroup('addJeuxRules');

            if($this->validate($rules)){

                $img = $this->request->getFile('image');
                if ($img->isValid() && ! $img->hasMoved()) {
                    $newName = $img->getRandomName();
                    $img->move(FCPATH.'assets/uploads', $newName);
                    $postData['image']= $newName;
                }

                $jeuModel = new \App\Models\JeuModel();
                $jeuModel->addJeux($postData);


                // $_SESSION['addJeuOk'] = 'C\'est bon! Le jeu à été ajouté ';
                // $this->session->markAsFlashdata('addJeuOk');
                return redirect()->route('Noob');
                
            }else{
                $data['validation'] = $this->validator;

                 }

            }
                return view ('templates/pageAjoutJeu',$data);
    }


    public function logOut(){

        $this->session->destroy();
        return redirect()->to('Start');

    }

}