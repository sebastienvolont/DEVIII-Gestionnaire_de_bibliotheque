function rechercherLivreApi(){
    let xhr = new XMLHttpRequest();
    xhr.onload = recupererDonnees;
    xhr.open("get", "http://localhost:8000/api/livres/2", true);
    xhr.send();
}

function recupererDonnees () {
    return this.responseText;
}

rechercherLivreApi();