<?php
	//	2e étape : Si le formulaire a été soumis, définition du dictionnaire et vérification de la cohérence des données qui seront utilisées pour effectuer la traduction. [Lignes 4 à 19]

	//	Si la variable « $_GET » n'est pas vide… (ce qui signifie que le formulaire aura été soumis)
	if(!empty($_GET))
	{
		//	Définition du dictionnaire (les clés sont en anglais et les valeurs en français)
		$dictionary =
		[
	        'cat' => 'chat',
			'dog' => 'chien',
			'monkey' => 'singe',
			'sea' => 'mer',
			'sun' => 'soleil'
		];

		//	Vérification de la cohérence des données qui seront utilisées pour effectuer la traduction
		var_dump($_GET, $dictionary);
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Traducteur</title>
	</head>
	<body>
		<!--	L'attribut « action » indique vers quelle adresse seront envoyées les données saisies lors de la soumission du formulaire.	-->
		<form action="2e-etape.php" method="get">
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