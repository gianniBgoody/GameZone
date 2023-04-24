
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