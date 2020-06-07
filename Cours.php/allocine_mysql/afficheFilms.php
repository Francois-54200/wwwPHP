<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = "mysql:host=localhost;dbname=test";
$user = "root";
$passwd = "";
$pdo = new PDO($dsn, $user, $passwd);
  $mesFilms =[];
if(!isset($_GET["search"]))
{
  $stm = $pdo->query("SELECT * FROM `films` ");
  $mesFilms = $stm->fetchAll();
  //$mesFilms = json_decode(file_get_contents("maCineTech.json"),true);
}
else
{
  $stm = $pdo->query("SELECT * FROM `films` WHERE titre LIKE '%".$_GET["search"]."%' OR description LIKE '%".$_GET["search"]."%'");
  $mesFilms = $stm->fetchAll();
  /*  $tmpMesFilms = json_decode(file_get_contents("maCineTech.json"),true);
    foreach($tmpMesFilms as $tmpUnFilm )
    {
        if(preg_match ('/'.$_GET["search"].'/i' ,  $tmpUnFilm["titre"] ))
        {
            array_push ($mesFilms,$tmpUnFilm);
        }
        elseif(preg_match ('/'.$_GET["search"].'/i' ,  $tmpUnFilm["desc"] ))
        {
            array_push ($mesFilms,$tmpUnFilm);
        }
    }*/
}   
    $tabCss = [];
    array_push ($tabCss,'./css/flex.css');
    array_push ($tabCss,'./css/navbar.css');
    
    $titlePage = "Affichage Films";
    
    include './afficheFilms.phtml';
  //  var_dump($mesFilms);
?>