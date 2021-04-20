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

// import Banner from "./MyComponent"

<<<<<<< Updated upstream
import AuteurLivre from "./MyComponent";
=======
import TestTable from "./MyComponent";

import logo from "./img/bibliotheque-logo.svg"
>>>>>>> Stashed changes


class App extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            livres: [],
            isLoaded : false,
        }
    }

    componentDidMount(){
        fetch("http://localhost:8000/api/livres")
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

    render() {
        const {livres} = this.state;

        return (
<<<<<<< Updated upstream
            <div>
                {livres.map((livre, i) => (
                    <AuteurLivre key={i} titre={livre.titre} auteur={livre.auteur}/>
                ))}
=======
            <div  className="container">
        <header>

        <center>
            <h1 className="titreH1">Modification de ma bibliothÃ¨que</h1>
        </center>
        <img src={logo} className={'bibliothequeLogo'}/>
        </header>

            <div>

            <table className="table table-secondary table-bordered border-dark">
            <thead className="thead-dark">
                <tr>
                    <th>Id livre</th>
                    <th>Titre</th>
                    <th>Auteur </th>
                    <th> </th>
                </tr>
            </thead>
                {livres.map((livre, i) => (
                    <TestTable key={i} idLivre={livre.idLivre} titre={livre.titre} auteur={livre.auteur}/>
                ))}
            </table>
            </div>
>>>>>>> Stashed changes
            </div>
        )
    }
}

ReactDOM.render(<App />, document.getElementById("root"))

<<<<<<< Updated upstream
=======
                /* {{livres.map((livre, i) => (
                    <AuteurLivre key={i} titre={livre.titre} auteur={livre.auteur}/>
                ))} }*/
>>>>>>> Stashed changes
