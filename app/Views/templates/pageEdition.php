<?= $this->extend('layouts/mainUser') ?>

<?= $this->section('contentUser') ?>

<section id="contentUser" >

<div class ="container">

<h2 class = "text-center"><?=$header['title']?></h2>

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

</div>

<!-- 
    <div class="row justify-content-between mt-5">
    <div class="col-2 ">
    <ul class="nav flex-column bg-warning bg-opacity-25">
    <li class="nav-item my-5">
        <a class="nav-link center-text text-dark fs-4" aria-current="page" href="#">Genres</a>
    </li>
    <li class="nav-item mb-5 text-dark fs-4">
        <a class="nav-link" href="#">Plateformes</a>
    </li>
    <li class="nav-item mb-5 text-dark fs-4">
        <a class="nav-link" href="#">Images</a>
    </li>
    <li class="nav-item">
        <a class="nav-link">Disabled</a>
    </li>
    </ul>
    </div>
    <div class="col-9 bg-warning bg-opacity-25 mx-3">
        <h4 class="my-3">Vous êtes sur la page d'accueil administrateur</h4>
        <p>Veullez choisir une tâche à effectuer</p>
    </div>
</div>
 -->
 
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-warning bg-opacity-50 sticky-top">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-warning bg-opacity-25 align-items-center sticky-top">
                    <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                        <i class="bi-bootstrap fs-1"></i>
                    </a>
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link py-3 px-2" title="Editer un jeu" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="jeu">
                                <i class="bi-controller fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="Ajouter une image" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="images">
                                <i class="bi-images fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="Ajouter une catégorie" data-bs-toggle="tooltip" data-bs-placement="right" 
                            data-bs-original-title="category">
                                
                                <i class="bi-tags fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="delete">
                                <i class="bi-trash3 fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="playstation">
                                <i class="bi-playstation fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Nintendo">
                                <i class="bi-nintendo-switch fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Microsoft">
                                <i class="bi-xbox fs-1"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-person-circle h2"></i>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">

            <h4 class="my-3">Vous êtes sur la page d'accueil administrateur</h4>
            <p>Veullez choisir une tâche à effectuer</p>
                <!-- content -->
            </div>
        </div>
    </div>


<?= $this->endSection() ?>

