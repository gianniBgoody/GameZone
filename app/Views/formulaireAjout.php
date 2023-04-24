
<!-- Section du site qui sera en mode content-->
<section id="contentUser" >

<div class ="container">

<h2 class = "text-center"><?=$header['meta_title']?></h2>

<?php if (isset($_SESSION['connexionOk'])): ?>
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
 		 <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
   		 <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  		</symbol>
	</svg>
	<div class="alert alert-secondary d-flex align-items-center mx-auto" role="alert">
  		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  		<div>
		  <?= $_SESSION['connexionOk']; ?>
   		</div>
	</div>
<?php endif;?>


		<!-- <img src="<?=base_url('assets/images/fondecran.png')?>" id= "fondecran1" alt="jooueur" width="100%" height="100%" class="d-inline-block align-text-center">  -->
		<!--	<img src="<?=base_url('assets/images/invader.png')?>" id= "fondecran" alt="invader" width="100%" height="100%" class="d-inline-block align-text-center"> -->
		<!--	<img src="<?=base_url('assets/images/mario.png')?>" id= "fondecran2" alt="mario" width="100%" height="100%" class="d-inline-block align-text-center"> -->
</div>




<style>
	.close:hover {
  background-color: #f44336;
  color: white;
}
</style>

<div class = "container my-5">
	<?= form_open_multipart('Noob');?>
	<div class= "row">
		<div class="col">
			<div class = mb-3>
				<?= form_input('nom_jeu', '', ['id' => 'nom_jeu', 'class' => 'form-control border-warning', 'placeholder' => 'Titre du jeu', 'required' => true]);?>
			</div>
			<div class = mb-3>
				<?= form_input('url_officielle', '', ['id' => 'url_officielle', 'class' => 'form-control border-warning', 'placeholder' => 'Lien web du jeu', 'required' => true]);?>
			</div>
			<div class="form-floating mb-3">
				<?= form_textarea('description', 'Insérer du texte', ['id' => 'description', 'class' => 'form-control border-warning', 'style' => 'height:200px', 'required' => true]);?>
			</div>
		</div>
		
		<div class="col">
			<div class="mb-3 col">
				<?= form_upload('image', '', ['id' => 'image', 'class'=>'form-control border-warning', 'type'=>'file']);?>
			</div>
			<!-- insertion de la div pour l'image de l'upload -->
				<div id="insert_image" class="col text-center" style="height: 250px;">

				</div>
			
		</div>
	</div>

	<!-- section de la todoList pour le choix des genre/plateforme -->
	<div class="row">
		<!-- choix du genre -->
		<div class="col">
			<div class="card border-warning mb-3" style="max-width: 42rem;">
  				<div class="card-header text-center">
					Selectionner le Genre 
				</div>
  				<div class="card-body">
					<div class="input-group mb-3">
						 <?= form_input('genre_creation', '', ['id' => 'genre_creation', 'class' => 'form-control border-warning', 'placeholder' => 'Ajouter un genre', 'required' => true]);?>
						<!-- $js= 'onClick="nouveauGenre()"';
						echo form_button('button_creation', 'OK',  $js, ['id' => 'button_creation', 'class' => 'btn btn-outline-dark']);
						?> -->
						<button class="btn btn-outline-dark" type="button" id="bouton_genre" onclick="nouveauGenre()">OK</button> 
					</div>

					<div class="row">

					<ul ondragstart="start(event)" class="col list-group list-unstyled" id="genreListe">
						<li class="list-group-item">Ajouter si manquant (DRAG)</li>

					</ul>

	
					<ul ondragover="return over(event)" ondrop="return drop(event)" ondragleave="leave(event)" class="col border border-light m-1 list-group list-unstyled" name="nom_genre" id="genreValidation">
						<li class="list-group-item">Valider (DROP)</li>
					</ul>
    				</div>	

  				</div>
			</div>
		</div>

		<!-- choix de la plateforme -->
		<div class="col">
			<div class="card border-warning mb-3" style="max-width: 42rem;">
  				<div class="card-header text-center">
					Selectionner la Plateforme
				</div>
  				<div class="card-body">
					<div class="input-group mb-3">
						<?= form_input('plateforme_creation', '', ['id' => 'plateforme_creation', 'class' => 'form-control border-warning', 'placeholder' => 'Ajouter une plateforme', 'required' => true]);?>
						<button class="btn btn-outline-dark" type="submit" id="bouton_plateforme" onclick="nouvellePlateforme()">OK</button>
					</div>

					<div class="row">
					<ul ondragstart="start(event)" class="col list-group list-unstyled" id="plateformeListe">
						<li class="list-group-item">Choisir la Plateforme (DRAG)</li>

					</ul>

					<ul ondragover="return over(event)" ondrop="return drop(event)" ondragleave="leave(event)" class="col border border-light m-1 list-group list-unstyled" name="nom_plateforme" id="plateformeValidation">
						<li class="list-group-item">Valider la Plateforme (DROP)</li>
					</ul>
    				</div>	
    					
  				</div>
			</div>
		</div>
	</div>
	<?= form_submit('submit', 'Valider le formulaire', ['id' => 'submitBtn', 'class'=>'btn btn-outline-dark border border-warning d-flex align-item-center mx-auto mt-4']); ?>
	<?= form_close();?>
</div>


</section>

<script src="<?=base_url('assets/js/formulaireAjout.js')?>"></script>