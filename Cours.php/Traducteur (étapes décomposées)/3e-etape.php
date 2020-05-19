<?php
	//	3e étape : Traduction, si possible, du mot saisi (uniquement en français dans un premier temps). [Lignes 17 à 27 et 37 à 41]

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

		//	Si le mot à traduire existe dans le dictionnaire
		if(array_key_exists($_GET['word'], $dictionary))
		{
			//	Le mot peut être traduit
			$result = '« '.$_GET['word'].' » se traduit « '.$dictionary[$_GET['word']].' »';
		}
		else
		{
			//	Le mot ne peut pas être traduit
			$result = 'Je ne sais pas traduire « '.$_GET['word'].' »';
		}
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Traducteur</title>
	</head>
	<body>
		<!--	S'il y a un résultat à afficher…	-->
		<?php if(isset($result)): ?>
			<!--	Affichage du résultat	-->
			<p><?= $result ?></p>
		<?php endif ?>
		<!--	L'attribut « action » indique vers quelle adresse seront envoyées les données saisies lors de la soumission du formulaire.	-->
		<form action="3e-etape.php" method="get">
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