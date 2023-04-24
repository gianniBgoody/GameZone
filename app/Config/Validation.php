<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $inscriptionRules = array(
        'mail' => array(
                'label' => 'mail',
                'rules'  => 'required|valid_email|is_unique[utilisateur.mail]',
                'errors' => array(
                  'required' => 'Le champs email est requis',
                  'valid_email' => '*Vous devez renseigner un email valide.',
                  'is_unique' => '*Cet email possede déjà un compte'
                )
        ),
        'password' => array(
                'label' => 'password',
                'rules' => 'required|min_length[4]|regex_match[/(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/]',
                'errors' => array('required' => 'mot de passe requis',
                                  'min_length' => '*4 caractères au minimum',
                                  'regex_match' => '*Au moins une Majuscule, une minuscule, un chiffre et un caractère spécial ',
                            )
        ),
        'confirm_password' => array(
              'label' => 'confirm_password',
              'rules' => 'required|matches[password]',
              'errors' => array(
                'required' => 'champs obligatoire',
                'matches[password]' => '*Doit être identique au mot de passe'
              ),
        ),
        'nom' => array(
           'label' => 'nom',
           'rules' => 'required|alpha_space|min_length[3]',
           'errors' => array(
             'required' => 'Le nom est obligatoire',
             'min_length' => '3 caractères au minimum',
             'alpha_space' => 'Lettres et espaces seulement'
           ),
        ),
        'prenom' => array(
            'label' => 'prenom',
            'rules' => 'required|alpha_space|min_length[3]',
            'errors' => array(
              'required' => 'Le prénom est obligatoire',
              'min_length' => '3 caractères au minimum',
              'alpha_space' => 'Uniquement chiffres, lettres, espaces, et ~ ! # $ % & * - _ + = | : . sont autorisés'
            ),
         ),
         'pseudo' => array(
            'label' => 'pseudo',
            'rules' => 'required|alpha_numeric_punct|min_length[3]|is_unique[utilisateur.pseudo]',
            'errors' => array(
              'required' => 'Choisir un Pseudo',
              'min_length' => '3 caractères au minimum',
              'alpha_numeric_punct' => 'Lettres et espaces seulement',
              'is_unique' => 'Ce pseudo existe déjà. Veuillez en choisir un autre'
            ),
         ),
  
      );

      public $connectionRules = array(
        'mail' => array(
          'label' => 'mail',
          'rules'  => 'required',
          'errors' => array(
            'required' => 'L\'email ou le pseudo est requis',
            // 'valid_email' => '*Vous devez renseigner un email valide.',
            // 'is_not_unique' => 'Utilisateur inconnu'
          )
        ),

        'password' => array(
            'label' => 'password',
            'rules' => 'required',
            'errors' => array(
            'required' => 'Mot de passe requis'
          )
        ),

      );


      public $addJeuxRules= array(

        'nom_jeu' => array(
          'label' => 'nom_jeu',
          'rules' => 'required|min_length[3]',
          'errors' => array(
            'required' => 'Nom du jeu obligatoire',
            'min_length' => '3 caractères au minimum',
          ),
        ),

      'url_officielle' => array(
        'label' => 'url_officielle',
        'rules' => 'required|valid_url',
        'errors' => array(
          'required' => 'Insérer une url',
          'valid_url' => 'Url non valide',
          ),
        ),

        'description' => array(
          'label' => 'description',
          'rules' => 'required',
          'errors' => array(
            'required' => 'Description obligatoire',
          ),
        ),

        'genres' => array(
        'label' => 'nom_genre',
        'rules' => 'required',
        'errors' => array(
        'required' => 'Utiliser le Drag n Drop',
       
          ),
        ),

       'plateformes' => array(
        'label' => 'nom_plateforme',
        'rules' => 'required',
        'errors' => array(
        'required' => 'Drag n Drop method required',
        ),
     ),

      'image' => array(
        'label' => 'image',
        'rules' => 'uploaded[image]|max_size[image, 2000]|is_image[image]',
        'errors' => array(
          'uploaded' => 'insérer une image',
          'max_size' => 'fichier trop volumineux',
          'is_image' => 'Ceci n\'est pas une image',
        ),
      ),

      );

}
