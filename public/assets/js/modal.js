
  $(document).ready(function() {
    let openModal = document.getElementById('openModal').getAttribute('value');
    if(openModal){
        $("#connexion").modal('show');
        console.log(openModal);
    }
    else{
        console.log('rien ne se passe');
    }
  });

