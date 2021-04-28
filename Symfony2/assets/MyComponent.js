import './app.js'
import React from 'react'
import ReactDOM from 'react-dom'
import './styles/Banner.css'
import './styles/app.css'
import './bootstrap';
import logo from "./img/bibliotheque-logo.svg"

function Banner() {
    return (
        <header>

            <center>
                <h1 className="titreH1">Modification de ma bibliothèque</h1>
            </center>
            <img src={logo} className={'bibliothequeLogo'}/>
            <ModifBibli />
        </header>
    )
}

function AuteurLivre(props) {
    return (
        <ul>
            <li>
                {props.titre} | {props.auteur}
            </li>
        </ul>
    )
}
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

function CreaTd() {
    return (
        <td> test </td>
    )
}

function CreaButton(){
    return(
        <div>
            <button className="btn btn-success">Modifier</button>
            <button className="btn btn-danger"> Supprimer</button>
        </div>
    )
}

function CreaTBody(){
    return (
        <tr>
            <CreaTd />
            <CreaTd />
            <CreaTd />
            <CreaButton />
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
                <CreaTBody />
                <CreaTBody />
                <CreaTBody />
                <CreaTBody />
                <CreaTBody />
                <CreaTBody />
                </tbody>
            </table>
        </div>
    )
}





export default AuteurLivre;


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
