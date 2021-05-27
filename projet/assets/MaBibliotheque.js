import './bootstrap';
import React from 'react'
import ReactDOM from 'react-dom'


class MaBibliotheque extends React.Component {

    constructor(props) {
        super(props);
        this.state = {
            livres: [],
            isLoaded : false,
            tri: '',
            filtreGenre : '',
            filtreStatut: '',
            caseChoisie : '',
        }
        this.changementStatutLivre = this.changementStatutLivre.bind(this)
    }

    refresh () {
        fetch("http://localhost:8000/api/livres", {method: 'GET'})
            .then(livresItems => livresItems.json())
            .then((response) => {
                this.setState({
                        isLoaded : true,
                        livres : response["hydra:member"]
                    }
                )
            });
            
    }

    reinitialiser () {
        this.setState({ tri: ""});
        this.setState({ filtreGenre: ""});
        this.setState({ filtreStatut : ""});
    }

    handleSort = (e) => {
        this.setState({ tri: e.target.value})
    }

    
    handleFilter = (e) => {
        this.setState({ filtreGenre: e.target.value})
    }

    handleFilterStatut = (e) => {
        this.setState({ filtreStatut: e.target.value})
    }

    handleCheckBox = (e) => {
        this.setState({ caseChoisie: e.target.value})
    }


    changementStatutLivre (id) {
        let statut={
            "statut" : this.state.caseChoisie
        }

    
        fetch("http://localhost:8000/api/livres/" + id, {method: 'PUT',
        headers: {
            'Content-type': 'application/json; charset=UTF-8'
        },
        body: JSON.stringify(statut)
    })
        .then(response => response.json())
        .then(this.refresh.bind(this))
    }


    render() {
        let {livres} = this.state;
        
        if (this.state.filtreGenre != ""){
        livres = this.state.livres.filter(livre => livre.genre == this.state.filtreGenre);
        }

        if (this.state.filtreStatut != ""){
            livres = this.state.livres.filter(livre => livre.statut == this.state.filtreStatut);
            }



        const triLivres = this.state.livres.sort((a, b) => {
            if(this.state.tri === 'Tri croissant') {
                if (a.titre > b.titre) { return 1}
                if (a.titre < b.titre) { return -1}
            }
            if(this.state.tri === 'Tri decroissant') {
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

        const livresTrouvees = () => {
            if (livres.length < 1) {
                return <div className="alert alert-danger" role="alert">
                        Pas de résultat lié à cette recherche
                </div>
            }
        }


        window.onload = this.refresh.bind(this)
                                            
        return (
            
            <div className={"container-fluid"}>
                
                

                    
                <FiltreLivre handleSort={this.handleSort} handleFilter={this.handleFilter} handleFilterStatut={this.handleFilterStatut} handleCheckBox={this.handleCheckBox} reinitialiser={this.reinitialiser.bind(this)}/>
                
                
                    {livres.map((livre, i) => (
                        <Bibliotheque handleCheckBox={this.handleCheckBox} changementStatutLivre={this.changementStatutLivre} key={i} couverture={livre.couverture} titre={livre.titre} synopsis={livre.synopsis} parution={livre.parution} statut={livre.statut} idLivre={livre.idLivre} />    
                    ))}
                    {livresTrouvees()}
                </div>
                
        )

    }
}


function FiltreLivre(props){
    return (
        <div className={"container divFiltres"}>
                <select className="form-select form-select-lg" aria-label="Default select example" onChange={props.handleSort} id="TriCroissantDecroissant">
                    <option defaultValue>Trier par ordre</option>
                    <option value="Tri croissant">Alphabétique croissant</option>
                    <option value="Tri decroissant">Alphabétique décroissant</option>
                    <option value="Parution croissant">Parution croissant</option>
                    <option value="Parution decroissant">Parution décroissant</option>
                </select>
                <select className="form-select form-select-lg" aria-label="Default select example" onChange={props.handleFilter} id="triGenre">
                    <option defaultValue value="">Genre littéraire</option>
                    <option value="Fiction">Fiction</option>
                    <option value="Drama">Drame</option>
                    <option value="Biography & Autobiography">Biographie & Autobiographie</option>
                </select>
                <select className="form-select form-select-lg prima" aria-label="Default select example" onChange={props.handleFilterStatut} id="triStatut">
                    <option defaultValue value="">Statut</option>
                    <option value="Non lu">Non lu </option>
                    <option value="En cours">En cours</option>
                    <option value="Terminé">Terminé</option>
                </select>
                
            <button className="btn btn-info" onClick={props.reinitialiser}> Réinitialiser les filtres</button>
            

        </div>
    )
}

function Bibliotheque (props){
        return (
            <div className={"container-fluid divBiblio"}>
            <div className="col md-6 lg-6">
                <div className="jumbotron">
            <div className="col-xs-10 col-sm-2">
                <img src={props.couverture} className="card-img-top" alt="couverture livre" />
            </div>
            <div className="col-xs-10 col-sm-8">
                <h4 className="card-title">{props.titre} | {props.parution} | {props.statut}</h4>
                <p className="card-text" style={{color : "black"}}>
                    {props.synopsis}
                </p>
                <a href={"http://localhost:8000/afficherLivre/" + props.idLivre}><button className="btn btn-primary"> Afficher plus d'informations </button></a>
            </div>
            <div className="form-check">
                <input className="form-check-input" type="checkbox" value="Non lu" id={"livreNonLu" + props.idLivre} name="statutLivre" onChange={props.handleCheckBox} onClick={() => choixCheckbox("livreFini" + props.idLivre, "livreEnCours" + props.idLivre, "livreNonLu" + props.idLivre)}/>
                <label className="form-check-label" htmlFor={"livreNonLu" + props.idLivre}>
                    Non lu
                </label> <br></br>

                <input className="form-check-input" type="checkbox" value="En cours" id={"livreEnCours" + props.idLivre} name="statutLivre" onChange={props.handleCheckBox} onClick={() => choixCheckbox("livreFini" + props.idLivre, "livreEnCours" + props.idLivre, "livreNonLu" + props.idLivre)}/> 
                <label className="form-check-label" htmlFor={"livreEnCours" + props.idLivre}>
                    En cours
                </label> <br></br>

                <input className="form-check-input" type="checkbox" value="Terminé" id={"livreFini" + props.idLivre} name="statutLivre" onChange={props.handleCheckBox} onClick={() => choixCheckbox("livreFini" + props.idLivre, "livreEnCours" + props.idLivre, "livreNonLu" + props.idLivre)}/> 
                <label className="form-check-label" htmlFor={"livreFini" + props.idLivre}>
                    Terminé
                </label> <br></br>

                <button className={"btn btn-primary"} onClick={props.changementStatutLivre.bind(props,props.idLivre)}>Changer le statut</button>
                </div>
                </div>
                </div>
        </div>

        )
}


function choixCheckbox (documentId1, documentId2, documentId3) {
    let isSelectedCheckBox1 = document.getElementById(documentId1);
    let isSelectedCheckBox2 = document.getElementById(documentId2);
    let isSelectedCheckBox3 = document.getElementById(documentId3);


    if (isSelectedCheckBox1.checked == true) {
        isSelectedCheckBox2.checked = false
        isSelectedCheckBox3.checked = false
    }

    else if (isSelectedCheckBox2.checked == true) {
        isSelectedCheckBox1.checked = false
        isSelectedCheckBox3.checked = false
    }

    else if (isSelectedCheckBox3.checked == true) {
        isSelectedCheckBox1.checked = false
        isSelectedCheckBox2.checked = false
    }


}

ReactDOM.render(<MaBibliotheque />, document.getElementById("sectionBibliotheque"))

