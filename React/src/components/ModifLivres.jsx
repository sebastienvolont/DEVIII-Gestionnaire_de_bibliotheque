import React from 'react'
import ReactDOM from 'react-dom'
import logo from "../assets/bibliotheque-logo.svg"
import ('../styles/ModifLivres.css')


function Banner() {
    return (
        <header>
            
            <center>
                <h1 className="titreH1">Modification de ma bibliothèque</h1>
            </center>
            <img src={logo} className={'bibliothequeLogo'} alt={"logo"}/>
            <EspaceConnexion />
            <ContainerLivre />
            <ModifBibli />
        </header>
    )
}

function CreationTd() {
    return (
        <td> test </td>
    )
}

function CreationButton(){
    return(
    <div>
    <button className="btn btn-success">Modifier</button>
    <button className="btn btn-danger"> Supprimer</button>
    </div>
    )
}

function CreationTBody(){
    return (
        <tr>
        <CreationTd />
        <CreationTd />
        <CreationTd />
        <CreationButton />
        </tr>
    )
}

function ModifBibli(){
    return(
        <table className="table table-secondary table-bordered border-dark">
            <thead>
                <tr  className="tableBoutonLivre">
                <th>

                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                    <th>
                        <button className="btn btn-primary"> Ajouter un livre</button>
                    </th>
                </tr>
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
                <CreationTBody />
                <CreationTBody />
                <CreationTBody />
                <CreationTBody />
                <CreationTBody />
                <CreationTBody />
            </tbody>
        </table>
    )
}

function EspaceConnexion(){
    return (
        <div className="espaceConnexion">
            <img src="https://icons.getbootstrap.com/assets/icons/gear.svg" className="paramGear" alt={"logo engrenage"}></img>
            <section className="photoUtilisateur">
                <img></img>
            </section>
            
        </div>
    )
}

function ContainerLivre(){
    return (
        <div className="container bg-secondary">

        </div>
    )
}

export default Banner