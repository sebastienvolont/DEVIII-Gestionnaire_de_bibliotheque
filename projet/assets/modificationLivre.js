import './bootstrap';


import React from 'react'
import ReactDOM from 'react-dom'

let identifiantLivres = window.location.href
let ident = identifiantLivres.split("/");
let id = ident[ident.length-1]


class ModificationLivre extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            livres: [],
            isLoaded : false,
        }
    }

    refresh () {
        fetch("http://localhost:8000/api/livres/"+ id, {method: 'GET'})
            .then(livresItems => livresItems.json())
            .then((response) => {
                this.setState({
                        isLoaded : true,
                        livres : response
                        
                    }
                )
            });
    }

    updatelivre (id,livres) {
        let someData={
            "titre" : document.getElementById("titre_livre").value,
            "edition" : document.getElementById("edition_livre").value,
            "genre" : document.getElementById("genre_livre").value,
            "synopsis" : document.getElementById("synopsis_livre").value,
            "couverture" : livres.couverture,
            "parution" : livres.parution,
            "auteur" : document.getElementById("auteur_livre").value,
            "idBibliotheque" : livres.idBibliotheque
        }
        fetch("http://localhost:8000/api/livres/" + id,{method: 'PUT', // Method itself
                headers: {
                  'Content-type': 'application/json; charset=UTF-8' // Indicates the content 
                },
                body: JSON.stringify(someData) // We send data in JSON format
            } )
        .then(response => response.json())
        
    }
    render() {
        const {livres} = this.state;
        window.onload = this.refresh.bind(this)

        return (
            
                <div>
                    <form label="modification du livre" onSubmit={this.updatelivre.bind(this,id,livres)}>
                        <div aria-describedby="titre_livre"><h3>Titre :</h3>
                            <input type="text" aria-labelledby="titre_livre" className="form-control" id="titre_livre" defaultValue={livres.titre} placeholder={livres.titre}/>
                        </div>

                        <div aria-describedby="auteur_livre"><h3>Auteur :</h3> 
                            <input type="text" aria-labelledby="auteur_livre" className="form-control" id="auteur_livre" defaultValue={livres.auteur} placeholder={livres.auteur}/>
                        </div>

                        <div aria-describedby="genre_livre"><h3>Genre :</h3>
                            <input type="text" aria-labelledby="genre_livre" className="form-control" id="genre_livre" defaultValue={livres.genre} placeholder={livres.genre}/>
                        </div>

                        <div aria-describedby="edition_livre"><h3>Edition :</h3>
                            <input type="text" aria-labelledby="edition_livre" className="form-control" id="edition_livre" defaultValue={livres.edition} placeholder={livres.edition}/>
                        </div>

                        <div aria-describedby="synopsis_livre"><h3>Synopsis :</h3>
                            <textarea className="form-control" aria-labelledby="synopsis_livre" id="synopsis_livre" defaultValue={livres.synopsis} placeholder={livres.edition} rows="10" />
                        </div>

                        <input type="submit" className="btn btn-primary" value="Update" />

                    </form>
                </div>
                )
        
    }
}
ReactDOM.render(<ModificationLivre />, document.getElementById("root"))

