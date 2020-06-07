<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$ret = "";
if(isset($_POST["titre"]))
{
    $dsn = "mysql:host=localhost;dbname=test";
    $user = "root";
    $passwd = "";
    $pdo = new PDO($dsn, $user, $passwd);

    $stm = $pdo->query("INSERT INTO `films` (titre, date, description, Image) VALUES ('".$_POST["titre"]."','".$_POST["date"]."','".$_POST["desc"]."','".$_POST["img"]."')");
    if($stm)
    {
        $ret = "J'ai bien écrit";
    }
    else
    {
        $ret = "It's ko";
    }
 
    /*$monFilm = ["titre" => $_POST["titre"],"desc" => $_POST["desc"],"date" => $_POST["date"],"img" => $_POST["img"]];
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
    }*/
}

$tabCss = [];
array_push ($tabCss,'./css/form.css');
array_push ($tabCss,'./css/navbar.css');

$titlePage = "Ajout d'un Film";

include './ajoutFilm.phtml';
//var_dump($mesFilms);
//var_dump( json_encode ($mesFilms));
?>
