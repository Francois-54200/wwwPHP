<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Cours.php/Exo/exo2-navbar.css">
    <title>Navbar</title>
</head>

<body>

    <nav>
        <h1>MonSite</h1>
        <ul id="mesLiensNav">
        <?php
  $mesLiens = [
    [
      "nom" => "Ajoute",
      "lien" => "ajouteligne.php"
    ],
    [
      "nom" => "formulaire",
      "lien" => "exo3-formulaire.php"
    ],
    [
      "nom" => "Salut Tristan",
      "lien" => "exo3-formulaire.php?prenom=Tristan&nom=Richard"
    ],
    [
      "nom" => "CSV",
      "lien" => "affichecsv.php"
    ]];
    foreach ($mesLiens as $unLien){
        echo '<li><a href="'.$unLien["lien"].'">'.$unLien["nom"].'</a>';
    }

  ?>
  </ul>
</nav>
<div>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php 
     var_dump($mesLiens); ?>
    </div>
</body>
</html>