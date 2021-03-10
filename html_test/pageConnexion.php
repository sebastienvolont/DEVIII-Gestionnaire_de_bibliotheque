<DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title> Bibliothèque virtuelle </title>
		<link rel="stylesheet" href="css/pageConnexion.css">
		<script src="js/bibliotheque.js"> </script>

	</head>
	<body>
		<a href="bibliotheque.php"><img src="img/bibliotheque-logo.svg" id="bibliothequeLogo"></a>
		<form id="champConnexion">
			<label for="pseudoUtilisateur"> Pseudonyme : <input type="text" name="champPseudo"> </label> <br> <br>
			<label for="motDePasseUtilisateur"> Mot de passe <input type="password" name="champMotDePasse"> </label> <br> <br>
			<input type="button" value="Connexion" id="boutonConnexion">
		</form>
		<form id="champInscription">
			<label for="nomInscription"> Nom : <input type="text" name="champNomInscription"> </label><br> <br>
			<label for="prenomInscription"> Prénom : <input type="text" name="champPrenomInscription"> </label><br> <br>
			<label for="pseudoInscription"> Pseudonyme : <input type="text" name="champPseudoInscription"> </label><br> <br>
			<label for="mailInscription"> Mail : <input type="text" name="champMailInscription"> </label><br> <br>
			<label for="motDePasseInscription"> Mot de passe : <input type="password" name="champMdpInscription"> </label><br><br>
			<label for="verifMdpInscription"> Veuillez confirmer le mot de passe : <input type="password" name="champVerifMdpInscription"> </label><br><br>
			<input type="submit" id="boutonInscription" value="S'inscrire"> 
		</form>
	</body>

</html>