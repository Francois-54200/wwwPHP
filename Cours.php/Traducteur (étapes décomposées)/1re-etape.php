<?php
	//	1re étape : Création du formulaire permettant de saisir un mot à traduire dans un sens de traduction.
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Traducteur</title>
	</head>
	<body>
		<!--	L'attribut « action » indique vers quelle adresse seront envoyées les données saisies lors de la soumission du formulaire.	-->
		<form action="1re-etape.php" method="get">
			<!--	L'attribut « method »  du formulaire valant « get » et l'attribut « name » du champ suivant valant « word », la valeur saisie dans ce champ sera alors récupérable dans la variable « $_GET['word'] ».	-->
			<input type="text" name="word">
			<!--	L'attribut « method »  du formulaire valant « get » et l'attribut « name » du champ suivant valant « direction », la valeur saisie dans ce champ sera alors récupérable dans la variable « $_GET['direction'] ».	-->
			<select name="direction">
				<option value="fr">Anglais -> Français</option>
				<option value="en">Français -> Anglais</option>
			</select>
			<button type="submit">Traudire</button>
		</form>
	</body>
</html>