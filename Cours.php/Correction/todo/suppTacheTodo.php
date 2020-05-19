<?php
$ret = "";
if(isset($_POST["tache"]))
{
    //On ouvre en lecture
    $handle = fopen("monfich.csv", "r");
    $numL = 0;
    $Lines = [];
    while($line = fgetcsv($handle))
    {
        if($numL!=$_POST["tache"])
        {
            //On stocke la ligne dans un tableau sauf celle qu'on veut supprimer
            array_push ($Lines,$line);
        }
        $numL++;
    }
    fclose($handle);

    //On ouvre le fichier en écriture de remplacement
    $handle = fopen("monfich.csv", "w+");
    foreach($Lines as $line)
    {
        //on stocke ligne à ligne dans le fichier
        if(!fputcsv($handle ,$line))
        {
            $ret = "It's ko";
        }
    }
    if($ret=="")
    {
        //on a eut aucune erreur
        $ret = "J'ai bien supprimée";
    }
    fclose($handle);
    
}

$handle = fopen("monfich.csv", "r");
$numL = 0;
$opt = "";
while($line = fgetcsv($handle))
{
    
    $opt .= '<option value="'.$numL.'">'.$line[0].'</option>';
    $numL++;
}      
fclose($handle);  

$tabCss = [];
array_push ($tabCss,'./css/form.css');
array_push ($tabCss,'./css/navbar.css');

$titlePage = "Suppression de tâche";

include './suppTacheTodo.phtml';

?>