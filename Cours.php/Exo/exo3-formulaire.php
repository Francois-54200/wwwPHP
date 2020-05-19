<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>

    <form action="exo3-formulaire.php" method="get">
        Prénom : <input type="text" name="prenom"> <br/>
        Nom : <input type="text" name="nom">
        <input type="submit" value="Valider">
    </form>
    <div>
    Mes data GET : <?php var_dump($_GET)?>
    Mes data POST : <?php var_dump($_POST)?>
    </div>
    <h1> Salut <?php echo $_GET["nom"] ?> <?php echo $_GET["prenom"] ?> 
</body>

</html>