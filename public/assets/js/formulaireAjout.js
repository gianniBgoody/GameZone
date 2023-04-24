// insertion de l'image selectionner par l'upload du formulaire

let doc = document.querySelector("#image");
let mini = document.querySelector("#insert_image");

//on met l'appel a la fonction de la fermeure des bouton du span
fermeture()

doc.addEventListener("change", ()=>{
    mini.innerHTML = "";
    let data = new FileReader();
    data.onload = readerEvt =>{
        console.log(data);
        let image = document.createElement("img");
        console.log(readerEvt.target);
        image.classList = "h-100";
        image.src = readerEvt.target.result;
        console.log("onload",image.src);
        mini.appendChild(image);   
    }
    data.readAsDataURL(doc.files[0]);
    console.log("loaded",image.src);
})


// ajouter un nouveau genre via l'input du formulaire

function nouveauGenre() {

    let genre = document.getElementById("genre_creation").value;

    let li = document.createElement("li");
    // li.setAttribute('value', genre);
    // li.setAttribute('id', genre);
    // li.setAttribute('draggable', true);
    li.id = genre;
    li.draggable = true;
    li.className="position-relative list-group-item list-group-item-warning "

    let texte = document.createTextNode(genre); 
    li.appendChild(texte);

    if (genre === '') {
      alert("Ecrire quelque chose!");
    } else {
      document.getElementById("genreListe").appendChild(li);
    }
    document.getElementById("genreListe").value = "";

    // bouton delete
    let span = document.createElement("SPAN");
    let txt = document.createTextNode("\u00D7");
    span.className = "close position-absolute top-0 end-0 fs-4 px-2";
    span.appendChild(txt);
    li.appendChild(span);

    //action quand on click sur button
    fermeture()

  //creation de l'input pour la checkbox
  let input= document.createElement("input");
  input.className ="form-check-input";
  input.type = "checkbox";
  input.value = "";
  input.checked =false;
  span.appendChild(input);
  // input.style.display = "none"


}

//définition de la fonction pour le bouton close du span
function fermeture() {
  let close = document.getElementsByClassName("close");
  let i;
  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      let div = this.parentElement;
      console.log(div)
      div.style.display = "none";
    }
  }
}

// ajouter une nouvelle plateforme via l'input du formulaire

function nouvellePlateforme() {

  let plateforme = document.getElementById("plateforme_creation").value;

  let li = document.createElement("li");
  // li.setAttribute('value', genre);
  // li.setAttribute('id', genre);
  // li.setAttribute('draggable', true);
  li.id = plateforme;
  li.draggable = true;
  li.className="position-relative list-group-item list-group-item-warning "

  let texte = document.createTextNode(plateforme); 
  li.appendChild(texte);

  if (plateforme === '') {
    alert("Ecrire quelque chose!");
  } else {
    document.getElementById("plateformeListe").appendChild(li);
  }
  document.getElementById("plateformeListe").value = "";

  // bouton delete
  let span = document.createElement("SPAN");
  span.className = "close position-absolute top-0 end-0 fs-4 px-2";
  span.innerHTML = "&#215"
  li.appendChild(span);

  //action quand on click sur button
  fermeture()
}


//Drag and Drop
function start(e){

    e.dataTransfer.effectAllowed="move";
    e.dataTransfer.setData('id', e.target.id);
    }

function over(e){

    e.currentTarget.classList="col border border-dark m-1";
    return false;
    // e.preventDefault();

}

function drop (e){

    let data = e.dataTransfer.getData("id");
    let element = document.getElementById(data)
    let id = data.split('-')[1]
    e.currentTarget.appendChild(element);
    e.currentTarget.classList="col border border-light m-1";
    if(data.slice(0,1) == "g") {
      element.classList.add("genreValide")
      let input = document.querySelector("#checkboxgenre-" + id)
      input.checked = true
    } else {
      element.classList.add("plateformeValide")
      let input = document.querySelector("#checkboxplateforme-" + id)
      input.checked = true
    }
    e.stopPropagation();
    return false;
}

function leave(e){
    e.currentTarget.classList="col border border-light m-1";
}


