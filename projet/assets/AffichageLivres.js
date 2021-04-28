import './app.js'
import React from 'react'
import ReactDOM from 'react-dom'
import './styles/Banner.css'
import './styles/app.css'
import './bootstrap';

class AffichageLivres extends React.Component{

    render () {
        return (
                <div className="card">
                <div className="card-body">
                    <h5 className="card-title">Card title</h5>
                    <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" className="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            )
        }
}

ReactDOM.render(<AffichageLivres />, document.getElementById("sectionLivres"))