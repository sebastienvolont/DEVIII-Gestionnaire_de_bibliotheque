/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';


import React from 'react'
import ReactDOM from 'react-dom'

import AfficherDonnees from "./ModifLivres";

import logo from "./img/bibliotheque-logo.svg"


class App extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            livres: [],
            isLoaded : false,
        }
    }

    refresh () {
        fetch("http://localhost:8000/api/livres", {method: 'GET'})
            .then(livresItems => livresItems.json())
            .then((response) => {
                // console.log(result["hydra:member"][0]["titre"]);
                this.setState({
                        isLoaded : true,
                        livres : response["hydra:member"]
                    }
                )
            });
    }

    delete (identifiantLivre) {
        fetch("http://localhost:8000/api/livres/" + identifiantLivre, {method : 'DELETE'})
            .then(this.refresh.bind(this))
    }


    render() {
        const {livres} = this.state;
        window.onload = this.refresh.bind(this)

        return (

            <div className={"container-fluid"}>
                <Banner />

                <table className="table table-secondary table-bordered border-dark">
                    <thead className="thead-dark">
                    <tr>
                        <th>Identifiant du livre</th>
                        <th>Titre</th>
                        <th>Auteur </th>
                        <th> </th>
                    </tr>
                    </thead>
                    {livres.map((livre, i) => (
                        <AfficherDonnees key={i} idLivre={livre.idLivre} titre={livre.titre} auteur={livre.auteur} appel={this.delete.bind(this, livre.idLivre)}/>

                    ))}
                </table>
                <button className={"btn btn-primary"} onClick={this.refresh.bind(this)}>Rafraichir la liste</button>
            </div>


        )
    }
}



function Banner() {
    return (
        <header>

            <center>
                <h1 className="titreH1">Modification de ma bibliothèque</h1>
            </center>
            <img src={logo} className={'bibliothequeLogo'}/>
        </header>
    )
}


ReactDOM.render(<App />, document.getElementById("root"))

