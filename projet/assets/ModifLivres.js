import './app.js'
import React from 'react'
import ReactDOM from 'react-dom'
import './styles/Banner.css'
import './styles/app.css'
import './bootstrap';
import logo from "./img/bibliotheque-logo.svg"



function AuteurLivre(props) {
    return (
        <ul>
            <li>
                {props.titre} | {props.auteur}
            </li>
        </ul>
    )
}

function AfficherDonnees(props) {
    return (
        <tbody>
        <tr>
            <td>{props.idLivre}</td>
            <td>{props.titre}</td>
            <td>{props.auteur}</td>
            <td><button className="btn btn-danger" value={props.idLivre} onClick={props.appel}> Supprimer</button>
            <a href={"http://localhost:8000/modifLivres/" + props.idLivre}><button className="btn btn-success" > Modifier</button></a></td>
        </tr>
        </tbody>
    )
}


function CreerTd() {
    return (
        <td> test </td>
    )
}

function CreerButton(props){
    return(
        <div>
            <button className="btn btn-success"> Modifier</button>
            {/* <button className={"btn btn-danger"} onClick={this.refresh.bind(this)}>Supprimer</button> */}
            <button className="btn btn-danger" > Supprimer</button>
        </div>
    )
}

function CreerBody(){
    return (
        <tr>
            <CreerTd />
            <CreerTd />
            <CreerTd />
            <CreerButton />
        </tr>
    )
}

function ModifBibli(){
    return(
        <div className="container-fluid">
            <table className="table table-secondary table-bordered border-dark">
                <thead className="thead-dark">
                <tr>
                    <th>
                        Titre
                    </th>
                    <th>
                        Auteur
                    </th>
                    <th>
                        Date
                    </th>
                    <th>
                    </th>
                </tr>

                </thead>
                <tbody>
                <CreerBody />
                <CreerBody />
                <CreerBody />
                <CreerBody />
                <CreerBody />
                <CreerTBody />
                </tbody>
            </table>
        </div>
    )
}





export default AfficherDonnees;


// function EspaceConnexion(){
//     return (
//         <div className="espaceConnexion">
//             <img src="https://icons.getbootstrap.com/assets/icons/gear.svg" className="paramGear"></img>
//             <section className="photoUtilisateur">
//                 <img></img>
//             </section>

//         </div>
//     )
// }

// function ContainerLivre(){
//     return (
//         <div className="container">

//         </div>
//     )
// }


// function BarreDeRecherche() {
//     return (
//         <nav className="navbar navbar-light bg-secondary">
//             <div className="container-fluid">
//                 <form className="d-flex">
//                     <input className="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search"/>
//                     <button className="btn btn-outline-success" type="submit">Rechercher</button>
//                 </form>
//             </div>
//         </nav>
//     )
// }

