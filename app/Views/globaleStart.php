<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Game Zone | jeux vidéo blog</title>
	<link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/g90.svg')?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

<!-- NAVbar -->
<div class="container mb-3">
<nav class="navbar navbar-expand-lg navbar-light bg-warning px-3 py-2>
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<img src="<?=base_url('assets/images/gamingZone_logo.png')?>" id= "logo" alt="logo" width="50" height="50" class="d-inline-block align-text-center">
			<span class="ps-1">GAME ZONE</span> 
		</a>

	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	 
	    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
	      <ul class="navbar-nav ms-auto ">
	        <li class="nav-item">
	          <a class="nav-link mx-2 active" aria-current="page" href="#">JEUX</a>
	        </li>
			    <li class="nav-item dropdown">
	          <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            PLATEFORMES
	          </a>
	          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	            <li><a class="dropdown-item" href="#">Nintendo</a></li>
	            <li><a class="dropdown-item" href="#">Playstation</a></li>
	            <li><a class="dropdown-item" href="#">Microsoft</a></li>
	          </ul>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link mx-2" href="#">GENRES</a>
	        </li>
	      </ul>
	      <ul class="navbar-nav ms-auto d-sm-inline-flex">
          <li class="nav-item">
          <!-- Button trigger modal -->
          <button type="button" class="nav-link mx-2 btn btn-outline-light btn-rounded btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            LOG IN
          </button>
         </li>
	      </ul>
	    </div>
	</div>
</nav>
</div>

<!-- Modal pour les formulaires - inclure dans la navbar-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?=base_url('assets/images/mushroom.svg')?>" id= "logo" alt="logo" width="50" height="50" class="d-inline-block align-text-center me-3">

        <h5 class="modal-title" id="exampleModalLabel text-center">Rejoindre la Communauté</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <ul class="nav nav-pills nav-fill mb-5" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-connexion-tab" data-bs-toggle="pill" data-bs-target="#pills-connexion" type="button" role="tab" aria-controls="pills-connexion" aria-selected="true">Connexion</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-inscription-tab" data-bs-toggle="pill" data-bs-target="#pills-inscription" type="button" role="tab" aria-controls="pills-inscription" aria-selected="false">Inscription</button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

          <!-- formulaire de connexion-->
          <div class="tab-pane fade show active" id="pills-connexion" role="tabpanel" aria-labelledby="pills-connexion-tab">
            <form>
              <div class="mb-3">
               <input type="text" class="form-control" placeholder="Email ou Pseudo" id="pseudo" name="pseudo" aria-label="pseudo">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" placeholder="Mot de passe" id="motdepasse" name="motdepasse" aria-label="motdepasse" >
              </div>
              <button type="submit" class="btn btn-primary mt-3 mb-5">Se Connecter</button>
              <div class="row justify-content-center">
                <span class="col-5" style="font-size:0.8em;"><a href="#!" class=""><p class="text-center">Mot de passe oublié ?</p></a></span>
                <span class="col-5" style="font-size:0.8em;"><a href="#!" class=""><p class="text-center">Pas encore de compte ?</p></a></span>
              </div> 
            </form>  
          </div>

        <!-- formulaire d'inscription-->
          <div class="tab-pane fade" id="pills-inscription" role="tabpanel" aria-labelledby="pills-inscription-tab">
          <form>
            <div class="mb-3 row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom" aria-label="nom">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Prenom" id="prenom" name="prenom" aria-label="prenom">
              </div>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Choisir un Pseudo" id="pseudo" name="pseudo" aria-label="pseudo">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email"  id="email" name="email" aria-label="email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Mot de passe" id="motdepasse" name="motdepasse" aria-label="motdepasse" >
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Confirmer mot de passe" id="confirm_motdepasse" name="confirm_motdepasse" aria-label="confirm_motdepasse" >
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">J'accepte les conditions d'utilisation</label>
            </div>
            <button type="submit" class="btn btn-primary my-2">S'inscrire</button>
            <span style="font-size:0.8em;"><a href="#!" class=""><p class="text-center">Déjà membre ?</p></a></span>
          </form>  
          </div>
        </div>
       </div>

      <!-- Modal Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>








<!-- Section du site qui sera en mode content-->
<section id="content" >
	<div class ="container">
<!--	<img src="<?=base_url('assets/images/fondecran.png')?>" id= "fondecran1" alt="jooueur" width="100%" height="100%" class="d-inline-block align-text-center"> -->
<!--	<img src="<?=base_url('assets/images/invader.png')?>" id= "fondecran" alt="invader" width="100%" height="100%" class="d-inline-block align-text-center"> -->
	<img src="<?=base_url('assets/images/mario.png')?>" id= "fondecran2" alt="mario" width="100%" height="100%" class="d-inline-block align-text-center">

		
	</div>
</section>

<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container mt-3 mb-5">
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-warning">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Game Zone
            </h6>
            <p>
			Vous n'avez pas de temps à perdre? <br>
			Game Zone est le filtre qui permet de trier entre le bon grain et l'ivraie.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">A PROPOS</h6>
            <p>
              <a class="text-white">Qui sommes nous?</a>
            </p>
            <p>
              <a class="text-white">Mentions légales</a>
            </p>
            <p>
              <a class="text-white">Protection des données personnelles</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              LIENS UTILES
            </h6>
            <p>
              <a class="text-white">Mon compte</a>
            </p>
            <p>
              <a class="text-white">s'abonner à la NewsLetter</a>
            </p>
            <p>
              <a class="text-white">Nous Contacter</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">PARTENAIRES</h6>
            <p>Pigeonnade Incorporation <br>
			Les prix de premières qualitay</p>
            <p> info.pigeon@gmail.com</p>
            <p>+ 06 234 567 88</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2022 
              <a class="text-white" href="#"
                 >Gianni B. Goody</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- snapchat -->
            <a class="m-1" href="#">
				<img src="<?=base_url('assets/images/snapchat.png')?>" id= "snapFooter" alt="snapchat" width="40" height="40">
			</a>

            <!-- Twitter -->
            <a class="m-1" href="#">
				<img src="<?=base_url('assets/images/twitter.png')?>" id= "twiterFooter" alt="twitter" width="40" height="40">
			</a>

            <!-- youtube -->
            <a class="m-1" href="#">
				<img src="<?=base_url('assets/images/youtube.png')?>" id= "ytFooter" alt="youtube" width="40" height="40">
			</a>

            <!-- facebook -->
			<a class="m-1" href="#">
				<img src="<?=base_url('assets/images/facebook.png')?>" id= "fbFooter" alt="facebook" width="40" height="40">
			</a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>