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

import AuteurLivre from "./MyComponent";


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
            <div>
                {livres.map((livre, i) => (
                    <AuteurLivre key={i} titre={livre.titre} auteur={livre.auteur}/>
                ))}
            </div>
        )
    }
}

ReactDOM.render(<App />, document.getElementById("root"))
