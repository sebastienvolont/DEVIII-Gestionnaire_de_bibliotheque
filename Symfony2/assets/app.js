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

import './test.js'

import React from 'react'
import ReactDOM from 'react-dom'

import Banner from "./MyComponent";


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
            .then(json => {
                this.setState({
                        isLoaded: true,
                        livres : json,
                    }
                )
            });
    }

    render() {
            // let {isLoaded, livres} = this.state;


        return (
            <Banner />
            // <div>
            //     <ul>
            //         {livres.map(livre => (
            //             <li key={livre[0][idLivre]}>
            //                 {livre["hydra:member"][0]["auteur"]}
            //             </li>
            //         ))};
            //     </ul>
            // </div>
        )
    }
}

ReactDOM.render(<App />, document.getElementById("root"))
