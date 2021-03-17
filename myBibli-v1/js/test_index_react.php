<DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title> Bibliothèque virtuelle </title>
		<script src="js/bibliotheque.js"> </script>
		<script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
		<script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
		<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
		<link rel="stylesheet" href="css/bibliotheque.css">
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


		ReactDOM.render(<div id="tete"><Header/><LinkElement/></div>,
				document.getElementById('root')
			)
		</script>
		<a href="index.php"><img src="img/bibliotheque-logo.svg" id="bibliothequeLogo" alt=""></a>

		<form id="rechercheLivre">
            <label for="barreDeRecherche"></label><input type="text" id="barreDeRecherche" value="Barre de recherche">
			<input type="button" id="recherchePublique" value="Publique">
		</form>
		<div id="containerLivres">

				<?php
					while($donneesLivres = $reponse->fetch())
					{
						echo "<section id='Livre01'><p>" . $donneesLivres["Auteur"] . "<br><br>" . $donneesLivres["titre"] . "</p>" . "<img src='" . $donneesLivres["premiereDeCouverture"] . "'><br><br> Synopsis :<br>" . $donneesLivres["synopsis"] . "</section>";
					}
					$reponse->closeCursor();
				?>
		</div>
	</body>

</html>
