<?php
 $erreurNom = isset($validation)?$validation->getError('nom'):'';
 $erreurPrenom = isset($validation)?$validation->getError('prenom'):'';
 $erreurPseudo= isset($validation)?$validation->getError('pseudo'):'';
 $erreurEmail = isset($validation)?$validation->getError('mail'):'';
 $erreurPassword = isset($validation)?$validation->getError('password'):'';
 $erreurConfirm = isset($validation)?$validation->getError('confirm_password'):'';

?>

<section id="inscriptionForm" >
	<h2 class = "text-center"><?=$header['title']?></h2>
    <p class = "text-center fs-4">Veuillez completer le formulaire pour la création du compte</p>
    <img src="<?=base_url('assets/images/mushroom.svg')?>" id= "logo" alt="logo" width="50" height="50" class="mx-auto d-block">

<div class="container">
	<div class ="col-8 mx-auto my-5">
        <?= form_open_multipart('Register');?>
            <div class="mb-3 row">
                <div class="col">
                <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom" aria-label="nom">
                <span class="text-danger"><?= $erreurNom ?></span>
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Prenom" id="prenom" name="prenom" aria-label="prenom">
                <span class="text-danger"><?= $erreurPrenom ?></span>
                </div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Choisir un Pseudo" id="pseudo" name="pseudo" aria-label="pseudo">
                <span class="text-danger"><?= $erreurPseudo ?></span>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email"  id="mail" name="mail" aria-label="mail">
                <span class="text-danger"><?= $erreurEmail ?></span>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Mot de passe" id="password" name="password" aria-label="password" >
                <span class="text-danger"><?= $erreurPassword ?></span>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Confirmer mot de passe" id="confirm_password" name="confirm_password" aria-label="confirm_password" >
                <span class="text-danger"><?= $erreurConfirm ?></span>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">J'accepte les conditions d'utilisation</label>
            </div>
            <button type="submit" class="btn btn-warning my-2">S'inscrire</button>
        <?= form_close();?> 
    </div>
</div>  
</section>