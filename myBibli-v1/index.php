<DOCTYPE html>
<html lang="">

	<head>
		<meta charset="utf-8">
		<title> Bibliothèque virtuelle </title>
		<script src="js/bibliotheque.js"> </script>
		<link rel="stylesheet" href="css/bibliotheque.css">

	</head>
	<body>
		<?php 
			$bdd_bibliotheque = new PDO('mysql:host=localhost;dbname=bibliothequevirtuelle;charset=utf8', 'root', '');

			$reponse = $bdd_bibliotheque->query("SELECT * FROM Livres");

		?>
		<header> <div style="text-align: center;"> <h1> Ma bibliothèque virtuelle </h1> </div> </header>
		<a href="index.php"><img src="img/bibliotheque-logo.svg" id="bibliothequeLogo" alt=""></a>
		<div id="espaceConnexion"> 
			<form name="formulaireConnexion"> 
				<p> Se connecter </p>
                <label>
                    <input type="text" name="nomUtilisateur">
                </label> <br>
                <label>
                    <input type="password" name="motDePasseUtilisateur">
                </label>
                <input type="submit" name="confirmerUtilisateur" value="Se connecter"><br><br>
				<a href="pageConnexion.php"> Je n'ai pas de compte </a>
			</form>
		</div>
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

					$url = 'https://www.googleapis.com/books/v1/volumes?q=harrypotter';
                    $recup_json = file_get_contents($url);
                    $objet_json = json_decode($recup_json, true);
//                    for($i = 0; $i < 10; $i++) {
                        $nom_livre = $objet_json["items"][0]["volumeInfo"]["title"];
                        print($nom_livre);
//                        $img_livre = $objet_json["items"][0]["imageLinks"]["thumbnail"];
//                        print($img_livre);


//                   $requete_insertion =  $bdd_bibliotheque->prepare('INSERT INTO livres (titre, anneeParution, maisonEdition, Auteur, synopsis, genreLitteraire, premiereDeCouverture) VALUES (:nom, 1992, " ", "victorhugo", " ", " ", " ")');
//
//                   $requete_insertion->execute(array(
//                           'nom' => $nom_livre,
//                   ));
                ?>
		</div>
	</body>

</html>