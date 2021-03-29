<DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title> Bibliothèque virtuelle </title>
		<script src="js/bibliotheque.js"> </script>
		<script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
		<script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
		<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
		<link rel="stylesheet" href="css/bibliotheque_test.css">
	</head>
	<body>
		<div id="root"></div>
		<?php
			$bdd_bibliotheque = new PDO('mysql:host=localhost;dbname=bibliotheque_virtuelle;charset=utf8', 'root', 'root');
			$reponse = $bdd_bibliotheque->query("SELECT * FROM Livres");
		?>
		<script type="text/babel">
		function Header(){
		return (<div className='titre'>
						<h1> Ma bibliothèque virtuelle</h1>
						</div>
						)
		}
		function LinkElement() {
    return <div className='connexion'><a href={"pageConnexion.php"}>Se connecter</a></div>
		}

		function rechercherLivre(){
	    let champNom = document.getElementById("barreDeRecherche").value;
	    let xhr = new XMLHttpRequest();
	    xhr.onload = recupererDonnees;
	    xhr.open("get", `https://www.googleapis.com/books/v1/volumes?q=${champNom}`, true);
	    xhr.send();
		}


		function ajouterLivre(){
			console.log("cette fonction va ajouter un livre a la DB")
		}

		function recupererDonnees() {
				let traiter = JSON.parse(this.responseText);
				console.log(traiter)
				let count = traiter.items.length
				document.getElementById("counter").innerHTML = "<p>Votre recherche à rapporté " + count + " résultats</p>";
				document.getElementById("containerLivres").innerHTML = "";
				for(let i = 0; i < Number(count); i++){
				let imageLivre = traiter["items"][i].volumeInfo.imageLinks.thumbnail
				document.getElementById("containerLivres").innerHTML += `<div id=Livre${i}> <p>  ${traiter["items"][i].volumeInfo.title} </p>`+ `<img src='${imageLivre}'>`+ "<p>" + traiter["items"][i].volumeInfo.authors + "</p><br><button onclick='ajouterLivre()'>Ajouter ce livre</button></div>";



			}

		}


		ReactDOM.render(<div id="tete"><Header/><LinkElement/></div>,
				document.getElementById('root')
			)
		</script>
		<a href="index.php"><img src="img/bibliotheque-logo.svg" id="bibliothequeLogo" alt=""></a>

		<form id="rechercheLivre">
            <label for="barreDeRecherche"></label><input type="text" id="barreDeRecherche" value="Barre de recherche">
			<input type="button" id="recherchePublique" value="Chercher" onclick="rechercherLivre()">
		</form>
		<div id="counter"></div>
		<div id="containerLivres">

				<?php
				echo $donneesLivres["idLivre"];
					while($donneesLivres = $reponse->fetch())
					{
						echo "<section id='{$donneesLivres["idLivre"]}' class='box_livre' onclick='location.href' == '''pageLivre.php'''><p>" . $donneesLivres["Auteur"] . "<br><br>" . $donneesLivres["titre"] . "</p>" . "<img src='" . $donneesLivres["premiereDeCouverture"] . "'><br><br> Synopsis :<br>" . $donneesLivres["synopsis"] . "</section>";
					}
					$reponse->closeCursor();
				?>
				<script>

				</script>
		</div>
	</body>

</html>
