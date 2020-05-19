<?php
$ret = "";
if(isset($_POST["tache"]))
{
    //On ouvre en lecture
    $handle = fopen("todolist.csv", "r");
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
    $handle = fopen("todolist.csv", "w+");
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Css/todolist.css">
    <link rel="stylesheet" href="./Css/navbartodolist.css">
</head>
<body>
<nav>
  <h1>TODO Liste</h1>
  <ul id="mesLiensNav">
    <li><a href="todolist.php">Affiche</a></li>
    <li><a href="ajoutetodolist.php">Ajoute</a></li>
    <li><a href="suptodolist.php">Supprime</a></li>
  </ul>
</nav>
    <div class="contener">
    <h1>Supprimer une tache</h1>
        <form action="./suptodolist.php" method="post">
            <div>
                <label for="tache">Tache : </label>
                <select name="tache" id="tache">
                    <?php
                        $handle = fopen("todolist.csv", "r");
                        $numL = 0;
                        while($line = fgetcsv($handle))
                        {
                            
                            echo '<option value="'.$numL.'">'.$line[0].'</option>';
                            $numL++;
                        }      
                        fclose($handle);    
                    ?>
                </select>
            </div>
            <div>
                <div></div>
                <input type="submit" value="Supprimer">
                <div></div>
            </div>
        </form>
        <?php
            if($ret!="")
            {
                echo '<h2>'.$ret.'</h2>';
            }
        ?>
    </div>
</body>
</html>