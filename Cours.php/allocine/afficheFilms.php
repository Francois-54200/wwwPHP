<?php
  $mesFilms =[];
if(!isset($_GET["search"]))
{
  $mesFilms = json_decode(file_get_contents("maCineTech.json"),true);
}
else
{
    $tmpMesFilms = json_decode(file_get_contents("maCineTech.json"),true);
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
    }
}   
    $tabCss = [];
    array_push ($tabCss,'./css/flex.css');
    array_push ($tabCss,'./css/navbar.css');
    
    $titlePage = "Affichage Films";
    
    include './afficheFilms.phtml';
  //  var_dump($mesFilms);
?>