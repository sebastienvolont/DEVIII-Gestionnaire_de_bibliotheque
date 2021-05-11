import './styles/app.css';
import './bootstrap';
import React from 'react'
import ReactDOM from 'react-dom'


class MaBibliotheque extends React.Component {

    constructor(props) {
        super(props);
        this.state = {
            livres: [],
            isLoaded : false,
            tri: ''
        }
    }

    refresh () {
        fetch("http://localhost:8000/api/livres", {method: 'GET'})
            .then(livresItems => livresItems.json())
            .then((response) => {
                // console.log(result["hydra:member"][0]["titre"]);
                console.log(response["hydra:member"][0].titre)
                this.setState({
                        isLoaded : true,
                        livres : response["hydra:member"]
                    }
                )
            });
            
    }

    handleSort = (e) => {
        console.log(e.target.value);
        this.setState({ tri: e.target.value})
    }

    render() {
        const {livres} = this.state;

        const triLivres = this.state.livres.sort((a, b) => {
            if(this.state.tri === 'Sort croissant') {
                if (a.titre > b.titre) { return 1}
                if (a.titre < b.titre) { return -1}
            }
            if(this.state.tri === 'Sort decroissant') {
                if (a.titre > b.titre) { return -1}
                if (a.titre < b.titre) { return 1}
            }
        
            if(this.state.tri === 'Parution croissant') {
                if (a.parution > b.parution) { return 1}
                if (a.parution < b.parution) { return -1}
            }
            if(this.state.tri === 'Parution decroissant') {
                if (a.parution > b.parution) { return -1}
                if (a.parution < b.parution) { return 1}
            }
            
        })

        window.onload = this.refresh.bind(this)

        return (

            <div className={"container-fluid"}>
                <FiltreLivre handleSort={this.handleSort} />
                    {livres.map((livre, i) => (
                        <Bibliotheque key={i} couverture={livre.couverture} titre={livre.titre} synopsis={livre.synopsis} parution={livre.parution} />    
                    ))}
            </div>
        )

    }
}


function FiltreLivre(props){
    return (
        <div className={"container divFiltres"}>
            <form method="post" action="">
                <select className="form-select form-select-lg" aria-label="Default select example" onChange={props.handleSort}>
                    <option defaultValue>Trier par ordre</option>
                    <option value="Sort croissant">Alphabétique croissant</option>
                    <option value="Sort decroissant">Alphabétique décroissant</option>
                    <option value="Parution croissant">Parution croissant</option>
                    <option value="Parution decroissant">Parution décroissant</option>
                </select>
                <select className="form-select form-select-lg" aria-label="Default select example">
                    <option defaultValue>Genre littéraire</option>
                    <option value="1">Fiction</option>
                    <option value="2">Drama</option>
                    <option value="3">Biography & Autobiography</option>
                </select>
                <select className="form-select form-select-lg prima" aria-label="Default select example">
                    <option defaultValue>Langue</option>
                    <option value="en">en</option>
                    <option value="fr">fr</option>
                </select>
                <select className="form-select form-select-lg" aria-label="Default select example">
                    <option defaultValue>Nombre de pages</option>
                    <option value="1"> Moins de 50 </option>
                    <option value="2"> Plus de 100 </option>

                </select>
            </form>
        </div>
    )
}

function Bibliotheque (props){
        return (
            <div className={"container divBiblio"}>
        <div className="row" style={{border: "2px solid black", backgroundColor : "grey"}}>
            <div className="col-xs-10 col-sm-2">
                <img src={props.couverture} className="card-img-top" alt="..." />
            </div>
            <div className="col-xs-10 col-sm-8">
                <h4 className="card-title">{props.titre} | {props.parution}</h4>
                <p className="card-text" style={{color : "white"}}>
                    {props.synopsis}
                </p>
            </div>
        </div>
        </div>
        )
}


ReactDOM.render(<MaBibliotheque />, document.getElementById("sectionBibliotheque"))

