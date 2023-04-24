<?php
//  $erreurPseudo= isset($validation)?$validation->getError('pseudo'):'';
 $erreurEmail = isset($validation)?$validation->getError('mail'):'';
 $erreurPassword = isset($validation)?$validation->getError('password'):'';
?>

<!-- ceci est l'input pour donner une valeur true ou false au Modal. a été rajouté -->
<input id="openModal" type="hidden" value="<?=$openModal;?>">

<div class="modal fade" id="connexion" data-bs-backdrop="static" tabindex="-1" aria-labelledby="connexionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?=base_url('assets/images/mushroom.svg')?>" id= "logo" alt="logo" width="50" height="50" class="d-inline-block align-text-center me-3">
        <h5 class="modal-title" id="exampleModalLabel text-center">Rejoindre la Communauté</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

      <?= form_open_multipart('Start');?>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Email ou Pseudo" id="mail" name="mail" aria-label="pseudo">
        </div>
        <span class="text-danger"><?=$erreurEmail;?></span>
        <!-- <span class="text-danger"></span> -->


        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Mot de passe" id="password" name="password" aria-label="password" >
          <span class="text-danger"><?=$erreurPassword;?></span>
        </div>
        <button type="submit" class="btn btn-warning mt-3 mb-5">LOG IN</button>
        <div class="row justify-content-center">
          <span class="col-5" style="font-size:0.8em;"><a href="#!" class=""><p class="text-center">Mot de passe oublié ?</p></a></span>
          <span class="col-5" style="font-size:0.8em;"><a href="<?=base_url('Register')?>" class=""><p class="text-center">Pas encore de compte ?</p></a></span>
        </div> 
      </form>  
    </div>  

   </div>
  </div>
</div>