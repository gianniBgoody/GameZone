<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function Update(){

        helper('form');

        $data['header'] = [
            'meta_title' => 'Game Zone | Page Admin',
            'title' => 'Page d\'administrateur'
        ];

        return view ('templates/pageEdition',$data);
    }


    

}
    
