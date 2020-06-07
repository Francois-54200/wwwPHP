<?php
$ret = "";
if(isset($_POST["titre"]))
{
    $monFilm = ["titre" => $_POST["titre"],"desc" => $_POST["desc"],"date" => $_POST["date"],"img" => $_POST["img"]];
    $mesFilms = json_decode(file_get_contents("maCineTech.json"),true);
    if(!is_array($mesFilms))
    {
        $mesFilms = [];
    }
    array_push ($mesFilms,$monFilm);
    if(file_put_contents ( "maCineTech.json" , json_encode ($mesFilms)))
    {
        $ret = "J'ai bien écrit";
    }
    else
    {
        $ret = "It's ko";
    }
}

$tabCss = [];
array_push ($tabCss,'./css/form.css');
array_push ($tabCss,'./css/navbar.css');

$titlePage = "Ajout d'un Film";

include './ajoutFilm.phtml';
//var_dump($mesFilms);
//var_dump( json_encode ($mesFilms));
?>
