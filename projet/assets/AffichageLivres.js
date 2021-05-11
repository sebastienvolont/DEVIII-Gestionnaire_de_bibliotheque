import './app.js'
import React from 'react'
import ReactDOM from 'react-dom'
import './styles/Banner.css'
import './styles/app.css'
import './bootstrap';

function AffichageLivre(props){
    return (
        <div className="row">
            <div className="col-xs-10 col-sm-2">
                <img src={props.couverture} className="card-img-top" alt="..." />
            </div>
            <div className="col-xs-10 col-sm-8">
                <h4 className="card-title">{props.titre}</h4>
                <p className="card-text">
                    {props.synopsis}
                </p>
            </div>
        </div>
    )
}

export default AffichageLivre;