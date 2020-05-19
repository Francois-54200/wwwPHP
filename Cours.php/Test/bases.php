<?php

	//	Déclaration et affectation d'une variable (j'opterai pour des noms en camelCase) (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/911847-les-variables#/id/r-911745)

	$myFirstVariable = 'Test';


	//	Affichage et concaténation d'une variable (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/911847-les-variables#/id/r-911788)

	echo '<h2>Affichage et concaténation d\'une variable</h2>';

	echo 'Ma première variable vaut : « '.$myFirstVariable.' » !'; //	(J'opterai pour les guillemets simples)


	//	Conditions (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912046-les-conditions)

	echo '<h2>Conditions</h2>';

	if(1 < 2 AND 3 > 4) //	Vaudra « true AND false », donc « false »
	{
		echo 'Ce message ne sera pas affiché…';
	}
	else if(12 === '12' OR 'a' === true) //	Vaudra « false OR false », donc « false »
	{
		echo 'Ce message ne sera pas affiché…';
	}
	else
	{
		echo 'Aucune des conditions n\'était vraie.';
	}

	//	Switch (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912046-les-conditions#/id/r-912018)

	//	Ternaires (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912046-les-conditions#/id/r-912045)

	echo '<h2>Conditions ternaires</h2>';

	$itemsPerPage = 20;

	echo 'Il y a '.$itemsPerPage.' article'.($itemsPerPage > 1 ? 's' : null).' par page.';


	//	Boucles (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912133-les-boucles)

	echo '<h2>Boucle while</h2>';

	echo '<ol>';

	$iterations = 0;

	while($iterations < 5) //	5 itérations
	{
		$iterations++;

		echo '<li>';
		echo 'Itération '.$iterations;
		echo '</li>';
	}

	echo '</ol>';

	echo '<h2>Boucle do… while</h2>';

	echo '<ol>';

	$iterations = 0;

	do
	{
		echo '<li>Itération '.++$iterations.'</li>';
	}
	while($iterations < 5); //	5 itérations

	echo '</ol>';

	echo '<h2>Boucle for</h2>';

	echo '<ol>';

	for($iterations = 1 ; $iterations <= 5 ; $iterations++) //	5 itérations
	{
		echo '<li>Itération '.$iterations.'</li>';
	}

	echo '</ol>';


	//	Tableaux (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux)

	echo '<h2>Tableaux</h2>';

	$months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre']; //	Tableau indexé

	var_dump($months);

	$colors =
	[
		'red' => '#ff0000',
		'green' => '#00ff00',
		'blue' => '#0000ff'
	]; //	Tableau associatif

	var_dump($colors);


	//	Boucle foreach (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239156)

	echo '<h2>Boucle foreach</h2>';

	echo '<ol>';

	foreach($months as $month) //	Sans récupération de l'index ou de la clé
	{
		echo '<li>'.$month.'</li>';
	}

	echo '</ol>';

	echo '<ul>';

	foreach($colors as $color => $hexadicmalValue) //	Sans récupération de l'index ou de la clé
	{
		echo '<li>'.$color.' : '.$hexadicmalValue.'</li>'; //	$hexadicmalValue vaut $colors[$color] 
	}

	echo '</ul>';

	echo '<a href="https://www.php.net/manual/fr/ref.array.php">Fonctions sur les tableaux (documentation officielle)</a>';


	//	Fonctions (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-les-fonctions)

	echo '<h2>Fonctions</h2>';

	function isEven($number)
	{
		return $number % 2 == 0;
	}

	echo '25 '.(isEven(25) ? 'est' : 'n\'est pas').' un nombre pair.';


	//	Include (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239271-inclure-des-portions-de-page)

	// include 'my-other-file.php'; //	Fichier inexistant ici


	//	$_GET (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912799-transmettez-des-donnees-avec-lurl)

	echo '<h2 id="get">$_GET</h2>';

	var_dump($_GET); //	Ce tableau particulier (variable superglobale) existe toujours, même s'il est vide.

	echo '<a href="bases.php#get?test=OK">En cliquant sur ce lien, $_GET aura une clé « test » qui vaudra « OK »</a>';


	//	$_POST (cf. : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912799-transmettez-des-donnees-avec-lurl)

	echo '<h2 id="post">$_POST</h2>';

	var_dump($_POST); //	Ce tableau particulier (variable superglobale) existe toujours, même s'il est vide.

	echo '<form action="bases.php#post" method="post">';
	echo '<input type="text" name="test" placeholder="Valeur">';
	echo '<button type="submit">En soumettant ce formulaire, $_POST aura une clé « test » qui vaudra ce qui aura été saisi dans le champ précédent</button>';
	echo '</form>';


	//	Subtilité quant à isset et array_key_exists

	echo '<h2>Subtilité quant à isset et array_key_exists</h2>';

	$myArray = ['key' => null];

	var_dump(isset($myArray['key'])); //	Vaut « false » car $myArray['key'] n'a pas de valeur
	var_dump(array_key_exists('key', $myArray)); //	Vaut « true » car la clé « key » existe dans le tableau « $myArray » (peut importe sa valeur)

	//	isset teste la valeur d'une variable. array_key_exists teste l'existence d'une clé.


	//	Si le fichier se termine par du PHP, il est conseillé de ne pas fermer la balise PHP pour éviter d'éventuels problèmes (cf. : https://www.php.net/manual/fr/language.basic-syntax.phptags.php)