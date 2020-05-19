<?php
	//	Ajout d'une ligne dans un fichier CSV
	function addLineToCSV($fileName, $line)
	{
		//	Ouverture du fichier en écriture
		$file = fopen($fileName, 'a');

		//	Si l'ouverture du fichier a échoué
		if($file == false)
		{
			//	Transmission de l'échec
			return false;
		}

		//	Enregistrement de la ligne à la suite du fichier
		fputcsv($file, $line);

		//	Fermeture du fichier
		fclose($file);

		//	Transmission de la réussite
		return true;
	}

	//	Récupération des lignes d'un fichier CSV
	function getLinesFromCSV($fileName)
	{
		//	Si le fichier n'existe pas
		if(!is_file($fileName))
		{
			//	Transmission de l'absence de ligne (car absence de fichier)
			return [];
		}

		//	Ouverture du fichier en écriture
		$file = fopen($fileName, 'r');

		//	 Si l'ouverture du fichier a échoué
		if($file == false)
		{
			//	Transmission de l'échec
			return false;
		}

		//	Initialisation du tableau recevant les lignes
		$lines = [];

		do
		{
			//	Récupération d'une ligne CSV
			$line = fgetcsv($file);

			//	Si la fin du fichier est atteinte
			if($line == false)
			{
				$endFile = true;
			}
			//	Si la fin du fichier n'est pas atteinte
			else
			{
				$endFile = false;
				//	Ajout de la ligne à l'ensemble des lignes
				$lines[] = $line;
			}
		}
		//	Tant que la fin du fichier n'est pas atteinte
		while(!$endFile);

		//	Fermeture du fichier
		fclose($file);

		//	Transmission des lignes
		return $lines;
	}

	//	Suppression d'une ligne d'un fichier CSV
	function removeLineOfCSV($fileName, $lineIndex)
	{
		//	Récupération des lignes du fichier
		$lines = getLinesFromCSV($fileName);

		//	Suppression de la ligne
		unset($lines[$lineIndex]);

		//	Ouverture du fichier en écriture, avec effacement du contenu
		$file = fopen($fileName, 'w');

		//	Si l'ouverture du fichier a échoué
		if($file == false)
		{
			//	Transmission de l'échec
			return false;
		}

		//	S'il reste au moins une ligne à enregistrer
		if(count($lines) >= 1)
		{
			//	Pour chaque ligne
			foreach($lines as $line)
			{
				//	Enregistrement de la ligne à la suite du fichier
				fputcsv($file, $line);
			}
		}

		//	Fermeture du fichier
		fclose($file);

		//	Transmission de la réussite
		return true;
	}