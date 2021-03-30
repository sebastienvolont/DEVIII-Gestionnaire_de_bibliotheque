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

					$url = 'https://www.googleapis.com/books/v1/volumes?q=bob';
                    $recup_json = file_get_contents($url);
                    $objet_json = json_decode($recup_json, true);
                    for($i = 0; $i < 10; $i++) {
                            if(isset($objet_json["items"][$i]["volumeInfo"]["title"])) {
                                $nom_livre = $objet_json["items"][$i]["volumeInfo"]["title"];

                                if (isset($objet_json["items"][$i]["volumeInfo"]["description"])) {
                                    $synopsys_livre = $objet_json["items"][$i]["volumeInfo"]["description"];
                                }
                                if (isset($objet_json["items"][$i]["volumeInfo"]["publishedDate"])) {
                                    $anneeParution_livre = $objet_json["items"][$i]["volumeInfo"]["publishedDate"];
                                }
                                if (isset($objet_json["items"][$i]["volumeInfo"]["imageLinks"]["thumbnail"])) {
                                    $img_livre = $objet_json["items"][$i]["volumeInfo"]["imageLinks"]["thumbnail"];
                                }
                                if (isset($objet_json["items"][$i]["volumeInfo"]["publisher"])) {
                                    $maisonEdition_livre = $objet_json["items"][$i]["volumeInfo"]["publisher"];
                                }
                                if (isset($objet_json["items"][$i]["volumeInfo"]["categories"][0])) {
                                    $genreLitteraire_livre = $objet_json["items"][$i]["volumeInfo"]["categories"][0];
                                }
                                if (isset($objet_json["items"][$i]["volumeInfo"]["authors"][0])) {
                                    $auteur_livre = $objet_json["items"][$i]["volumeInfo"]["authors"][0];
                                    print($auteur_livre);
                                }


                                $requete_insertion =  $bdd_bibliotheque->prepare('INSERT INTO livres (titre, anneeParution, maisonEdition, Auteur, synopsis, genreLitteraire, premiereDeCouverture) VALUES (:nom, :annee, :maison, :auteur, :synop, :genre, :premierecouv)');

                            $requete_insertion->execute(array(
                                'nom' => $nom_livre,
                                'annee' => $anneeParution_livre,
                                'maison' => $maisonEdition_livre,
                                'auteur' => $auteur_livre,
                                'synop' => $synopsys_livre,
                                'genre' => $genreLitteraire_livre,
                                'premierecouv' => $img_livre
                            ));
                    }

                            }


//                   $requete_insertion =  $bdd_bibliotheque->prepare('INSERT INTO livres (titre, anneeParution, maisonEdition, Auteur, synopsis, genreLitteraire, premiereDeCouverture) VALUES (:nom, 1992, " ", "victorhugo", " ", " ", " ")');
//
//                   $requete_insertion->execute(array(
//                           'nom' => $nom_livre,
//                   ));
                ?>
		</div>
	</body>

</html>