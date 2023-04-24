
<!-- NAVbar -->
<div class="container mb-3">
<nav class="navbar navbar-expand-lg navbar-light bg-warning px-3 py-2>
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
          <!-- Back end user menu -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <img src="<?=base_url('assets/images/mushroom_black.svg')?>" id= "logo" alt="logo" width="50" height="50" class="d-inline-block align-text-center">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Mon compte</a></li>
              <li><a class="dropdown-item" href="#">Ajouter un jeu</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Deconnexion</a></li>
            </ul>
         </li>
	      </ul>
	    </div>
	</div>
</nav>
</div>
