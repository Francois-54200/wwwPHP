<?php
$ret = "";  //déclaration de variable pour vérifier si on a bien écrit (variable commence par $)
if(isset($_POST["titre"]))   //permet de tester avec le if si il y a qqch 
{
    $montab = [$_POST["titre"],$_POST["desc"],$_POST["date"],$_POST["prio"]];  //si formulaire poster on créé un tableau
    $handle = fopen("todolist.csv", "a+");  //ouvrir le fichier csv
    if(fputcsv($handle , $montab))   //permet d'ajouter et de faire un test
    {
        $ret = "J'ai bien écrit";  //si ca a bien fonctionné ca ecrit ....
    }
    else
    {
        $ret = "It's ko";
    }
    fclose($handle);   //ferme le fichier
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="./Css/todolist.css">
    <link rel="stylesheet" href="./Css/navbartodolist.css">
</head>
<body>

    <nav>
        <h1>MonSite</h1>
        <ul id="mesLiensNav">
            <li><a href="todolist.php">Affiche</a></li>
            <li><a href="ajoutetodolist.php">Ajoute</a></li>
            <li><a href="suptodolist.php">Supprimer</a></li>
        </ul>
    </nav>
    
    <form action="./Css/todolist.css" method="POST">

		<fieldset>
		
			<legend>Formulaire</legend>
						
			<label for="titre">Titre</label>
				<input type="text" name="titre" />
				
			<br/>
									
			<label for="description" >Description</label>
                <textarea rows="10" cols="255" name="desc"></textarea>
            			
			<br/>
			
			<label for="date">Date</label>
				<input type="date" name="date"/>
				
            <br/>
            
            <label for="civilité" >Priorité : </label>
                
					<select name="prio">	
						<option> Critique </option>
						<option> Haute </option>
                        <option> Moyenne </option>
                        <option> Basse </option>
					</select>
						
			<br/>
			
			<label for="Envoi du Formulaire">Envoi du formulaire</label>
				<input type="submit" name="envoyer"/>
				
				
		</fieldset>
	
    </form>
    
    <?php
        if($ret!="")  //si ret est différent de vide alors.....
        {
            echo '<h2>'.$ret.'</h2>';
        }
    ?>

</body>
</html>