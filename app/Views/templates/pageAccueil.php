<?= $this->extend('layouts/mainStart') ?>

<?= $this->section('contentStart') ?>

<?= $this->include('modal_connexion.php') ?>



<section id="contentStart" >

<h2 class = "text-center"><?=$header['title']?></h2>

<div class ="container">

<?php
//  $erreurEmail = isset($validation)?$validation->getError('mail'):'';
//  $erreurPassword = isset($validation)?$validation->getError('password'):'';
?>


<!-- Message de confirmation de remplir le formulaire inscription
via le flashData session -->
<?php if (isset($_SESSION['inscriptionOk'])): ?>
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
 		 <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
   		 <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  		</symbol>
	</svg>
	<div class="alert alert-secondary d-flex align-items-center mx-auto" role="alert">
  		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  		<div>
		  <?= $_SESSION['inscriptionOk']; ?>
		<a href="" class="alert-link" data-bs-toggle="modal" data-bs-target="#connexion">  connecter 
		<img src="<?=base_url('assets/images/mushroom_black.svg')?>" id= "mushroom" alt="logo champignon" width="25px"; height="25px"; class="">
		</a>
   		</div>
	</div>
<?php endif;?>

<!-- message si le formulaire de connexion contient des erreurs avec d'apparition de la div uniquement si ya l'erreur
<?php //if (isset($validation)): ?>
<div class="alert alert-danger" role="alert">
OUPSS! une erreur s'est produite. veuillez réessayer <br>
<span class="text-danger"><?//= $erreurEmail ?></span><br>
<span class="text-danger"><?//= $erreurPassword ?></span>
</div>
<?php //endif;?>
-->



</section>



	<img src="<?=base_url('assets/images/fondecran.png')?>" id= "fondecran1" alt="jooueur" width="100%" height="100%" class="d-inline-block align-text-center">
<!--<img src="<?=base_url('assets/images/invader.png')?>" id= "fondecran" alt="invader" width="100%" height="100%" class="d-inline-block align-text-center"> -->
<!--<img src="<?=base_url('assets/images/mario.png')?>" id= "fondecran2" alt="mario" width="100%" height="100%" class="d-inline-block align-text-center"> -->

		
</div>
</section>

<?= $this->endSection() ?>