<?php


$ligne = 1; // compteur de ligne
$fic = fopen("tasks.csv", "a");

while($tab=fgetcsv($fic,1024,';'))
{
$champs = count($tab);//nombre de champ dans la ligne en question
echo " Les " . $champs . " champs de la ligne " . $ligne . " sont :
";
$ligne ++;
//affichage de chaque champ de la ligne en question
for($i=0; $i<$champs; $i ++)
{
echo $tab[$i] . "
";
}
}
    //    Ouverture du fichier CSV contenant les tâches
        //    fopen en lecture seule

    //    Récupération des tâches (une par une) tant qu'il y a des tâches à récupérer
        //    fgetcsv et une boucle (fgetcsv renvoit false quand il arrive à la fin du fihcier)

    var_dump($tasks);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>ToDo list</title>
    </head>
    <body>
        <!-- Affichage des tâches (foreach préconisé) -->
    </body>
</html>