import './app.js'
import React from 'react'
import ReactDOM from 'react-dom'
import './styles/Banner.css'
import './styles/app.css'
import './bootstrap';


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


export default AfficherDonnees;


