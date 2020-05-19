<?php
$ret = "";
if(isset($_POST["titre"]))
{
    $montab = [$_POST["titre"],$_POST["desc"],$_POST["date"],$_POST["prio"]];
    $handle = fopen("monfich.csv", "a+");
    if(fputcsv($handle , $montab))
    {
        $ret = "J'ai bien écrit";
    }
    else
    {
        $ret = "It's ko";
    }
    fclose($handle);
}

$tabCss = [];
array_push ($tabCss,'./css/form.css');
array_push ($tabCss,'./css/navbar.css');

$titlePage = "Suppression de tâche";

include './ajoutTacheTodo.phtml';
?>
