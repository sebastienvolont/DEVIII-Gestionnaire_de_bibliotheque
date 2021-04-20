import './app.js'
import React from 'react'
import ReactDOM from 'react-dom'
import './styles/Banner.css'
import './styles/app.css'
import './bootstrap';


class FetchLivre extends React.Component{
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
    <div className="container">
    {livres.map((livre, i) => (
                    // <TestTable key={i} idLivre={livre.idLivre} titre={livre.titre} auteur={livre.auteur}/>
                  <AffichageLivre key={i} couverture={livre.couverture} titre={livre.titre} synopsis={livre.synopsis}/>

                ))}
            </div>
        )
    }
}

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

ReactDOM.render(
  <FetchLivre />,
  document.getElementById("sectionLivres"))
