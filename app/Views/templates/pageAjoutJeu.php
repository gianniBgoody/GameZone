<?= $this->extend('layouts/mainUser') ?>

<?= $this->section('contentUser') ?>

<style>
.close:hover {
  background-color: #f44336;
  color: white;
}
</style>

<?php
 $erreurNomJeu = isset($validation)?$validation->getError('nom_jeu'):'';
 $erreurUrl = isset($validation)?$validation->getError('url_officielle'):'';
 $erreurDescription= isset($validation)?$validation->getError('description'):'';
 $erreurImage = isset($validation)?$validation->getError('image'):'';
 $erreurGenre = isset($validation)?$validation->getError('nom_genre'):'';
 $erreurPlateforme = isset($validation)?$validation->getError('nom_plateforme'):'';

?>

<h2 class = "text-center"><?=$header['title']?></h2>

<div class = "container my-5">
	<?= form_open_multipart('Games',['id' => 'formJeu']);?>
	<div class= "row">
		<div class="col">
			<div class = mb-3>
				<?= form_input('nom_jeu', '', ['id' => 'nom_jeu', 'class' => 'form-control border-warning', 'placeholder' => 'Titre du jeu']);?><span class="text-danger"><?= $erreurNomJeu ?></span>
			</div>
			<div class = mb-3>
				<?= form_input('url_officielle', '', ['id' => 'url_officielle', 'class' => 'form-control border-warning', 'placeholder' => 'Lien web du jeu']);?><span class="text-danger"><?= $erreurUrl ?></span>
			</div>
			<div class="form-floating mb-3">
				<?= form_textarea('description', '', ['id' => 'description', 'class' => 'form-control border-warning', 'style' => 'height:200px']);?><span class="text-danger"><?= $erreurDescription ?></span>
			</div>
		</div>
		
		<div class="col">
			<div class="mb-3 col">
				<?= form_upload('image', '', ['id' => 'image', 'class'=>'form-control border-warning', 'type'=>'file']);?><span class="text-danger"><?= $erreurImage ?></span>
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
				<span class="text-danger"><?= $erreurGenre ?></span>
  				<div class="card-body">
					<!-- 
					<div class="input-group mb-3">
						  <?= form_input('genre_creation', '', ['id' => 'genre_creation', 'class' => 'form-control border-warning', 'placeholder' => 'Ajouter un genre']);?>
						$js= 'onClick="nouveauGenre()"';
						echo form_button('button_creation', 'OK',  $js, ['id' => 'button_creation', 'class' => 'btn btn-outline-dark']);
						?> 
						<button class="btn btn-outline-dark" type="button" id="bouton_genre" onclick="nouveauGenre()">OK</button>
					</div> -->

					<div class="row">

					<ul ondragstart="start(event)" class="col list-group list-unstyled overflow-auto" style = "height:300px;"id="genreListe" >
							<li class="list-group-item">Prendre ici (DRAG)</li>
						<?php foreach ($genres as $genre) : ?>
							<li id="genre-<?= $genre["id"] ?>" 		class="position-relative list-group-item list-group-item-warning" draggable="true"><?= $genre["nom_genre"] ?><span class="close position-absolute top-0 end-0 fs-4 px-2"><input class="form-check-input" type="checkbox" value="<?= $genre["id"] ?>" name="genres[]" id="checkboxgenre-<?= $genre["id"] ?>" style="display:none"></span>
							</li>
						<?php endforeach; ?> 
					</ul>

	
					<ul ondragover="return over(event)" ondrop="return drop(event)" ondragleave="leave(event)" class="col border border-light m-1 list-group list-unstyled" name="nom_genre" id="genreValidation">
						<li class="list-group-item">Valider ici (DROP)</li>
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
				<span class="text-danger"><?= $erreurPlateforme ?></span>
  				<div class="card-body">
					<!-- <div class="input-group mb-3">
						<?= form_input('plateforme_creation', '', ['id' => 'plateforme_creation', 'class' => 'form-control border-warning', 'placeholder' => 'Ajouter une plateforme']);?>
						<button class="btn btn-outline-dark" type="button" id="bouton_plateforme" onclick="nouvellePlateforme()">OK</button>
					</div> -->

					<div class="row">
					<ul ondragstart="start(event)" class="col list-group list-unstyled overflow-auto" id="plateformeListe" style = "height:300px;">
						<li class="list-group-item">Choisir la Plateforme (DRAG)</li>
						<?php foreach ($plateformes as $plateforme) : ?>
							<li id="plateforme-<?= $plateforme["id"]?>" 		class="position-relative list-group-item list-group-item-warning" draggable="true"><?= $plateforme["nom_plateforme"] ?><span class="close position-absolute top-0 end-0 fs-4 px-2"><input class="form-check-input" type="checkbox" value="<?= $plateforme["id"] ?>" name="plateformes[]" id="checkboxplateforme-<?= $plateforme["id"] ?>" style="display:none"></span></li>
						<?php endforeach; ?> 
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
	<!-- <button class="btn btn-outline-dark border border-warning d-flex align-item-center mx-auto mt-4" type="button" onclick="validerJeu()">Valider le formulaire</button>  -->
	<?= form_close();?>
</div>


</section>

<script src="<?=base_url('assets/js/formulaireAjout.js')?>"></script>

<?= $this->endSection() ?>