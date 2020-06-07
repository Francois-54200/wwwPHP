/*
	Table concernée : products ;
	Connaissances utilisées : SELECT avec alias, WHERE, IN(), BETWEEN, ORDER BY.
*/

	/*
		Demande : Tous les produits triés par vendeur et par quantité décroissante ;
		Résultat attendu : 110 lignes.
	*/


	/*
		Demande : Produits (nom, vendeur, MSRP) ayant un prix de vente supérieur à 130 $, triés par nom ;
		Résultat attendu : 24 lignes.
	*/
	

	/*
		Demande : Produits (code, nom, prix d'achat) ayant un prix d'achat compris entre 60 $ et 90 $, triés par prix d'achat ;
		Résultat attendu : 34 lignes.
	*/
	

	/*
		Demande : Produits (code, nom, quantité) ayant une échelle de « 1:10 » ou de « 1:18 », triés par quantité en stock décroissante ;
		Résultat attendu : 48 lignes.
	*/
	

	/*
		Demande : Tous les produits (nom, ligne, vendeur, quantité, marge) triés par marge décroissante ;
		Résultat attendu : 110 lignes.
	*/
	


/*
	Table concernée : products ;
	Connaissances utilisées : SELECT avec GROUP BY, HAVING, MIN(), MAX(), AVG(), SUM(), COUNT() (plus les précédentes).
*/

	/*
		Demande : Le prix de vente moyen d'un produit ;
		Résultat attendu : 100.44.
	*/
	

	/*
		Demande : Le prix de vente moyen d'un produit pour chaque vendeur ;
		Résultat attendu :
			Autoart Studio Designs		105.56
			Carousel DieCast Legends	84.07
			Classic Metal Creations		106.66
			Exoto Designs				102.73
			Gearbox Collectibles		110.19
			Highway 66 Mini Classics	97.16
			Min Lin Diecast				98.79
			Motor City Art Classics		86.58
			Red Start Diecast			109.43
			Second Gear Diecast			113.50
			Studio M Art Models			70.55
			Unimax Art Galleries		108.79
			Welly Diecast Productions	113.93.
	*/
	

	/*
		Demande : Nombre de produits par ligne de produit ;
		Résultat attendu :
			Classic Cars        38
			Motorcycles	        13
			Planes	            12
			Ships	            9
			Trains	            3
			Trucks and Buses	11
			Vintage Cars	    24.
	*/
	

	/*
		Demande : Stock de chaque ligne de produit ;
		Résultat attendu :
			Classic Cars        219183
			Motorcycles	        69401
			Planes	            62287
			Ships	            26833
			Trains	            16696
			Trucks and Buses	35851
			Vintage Cars	    124880.
	*/
	

	/*
		Demande : Quantité du produit le plus en stock pour chaque vendeur ;
		Résultat attendu :
			Autoart Studio Design	    9354
			Carousel DieCast Legends	8197
			Classic Metal Creations	    9042
			Exoto Designs	            8290
			Gearbox Collectibles	    9446
			Highway 66 Mini Classics	7733
			Min Lin Diecast	            9772
			Motor City Art Classics	    9653
			Red Start Diecast	        8164
			Second Gear Diecast	        8820
			Studio M Art Models	        8635
			Unimax Art Galleries	    9997
			Welly Diecast Productions	9123
	*/
	

	/*
		Demande : Prix de l'avion qui coûte le moins cher à l'achat ;
		Résultat attendu : 29.34.
	*/
	


/*
	Connaissances utilisées : SELECT avec INNER JOIN (plus les précédentes).
*/
	/*
		Demande : Nom et prénom du client, nom et prénom du commercial dédié, des clients français ou américains, triés par nom et prénom du client
		Résultat attendu : 48 lignes.
	*/
	

	/*
		Demande : Numéro de commande, code, nom et ligne du produit, montant de la remise, des voitures ou des motos triées par numéro de commande puis remise inversée ;
		Résultat attendu : 2 026 lignes.
	*/
	

	/*
		Demande : Nom de société, pays et montant total des paiements des client américains, français et allemands dont le montant total des paiementst est supérieur à 50 000 $, triés par pays et montantt total des paiements ;
		Résultat attendu : 38 lignes.
	*/
	

	/*
		Demande : Ville et société des clients, numéro, date et montant total de chaque commande des clients new-yorkais, triées par date de commande de la plus récente à la plus ancienne (antéchronologique) ;
		Résultat attendu : 16 lignes.
	*/
	