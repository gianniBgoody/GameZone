<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $header['meta_title'] ?></title>
	<link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/g90.svg')?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>


<!-- NAVbar -->
<div class="container mb-3">
<nav class="navbar navbar-expand-lg navbar-light bg-warning px-3 py-2">
	<div class="container-fluid">
		<a class="navbar-brand" href="Start">
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
			<button type="button" class="av-link mx-2 btn btn-outline-light btn-rounded rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#connexion">
			CONNEXION
			</button>

         </li>
	      </ul>
	    </div>
	</div>
</nav>
</div>



<div class='container'>

<?= $this->renderSection('contentStart') ?>
</div>

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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="<?=base_url('assets/js/modal.js')?>"></script>
</body>
</html>