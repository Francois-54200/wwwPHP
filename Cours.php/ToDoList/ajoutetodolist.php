<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Css/ajoutetodolist.css">
    <link rel="stylesheet" href="./Css/navbartodolist.css">
</head>
<body>

    <nav>
        <h1>MonSite</h1>
            <ul id="mesLiensNav">
                <li><a href="todolist.php">Affiche</a></li>
                <li><a href="ajoutetodolist.php">Ajoute</a></li>
                <li><a href="suptodolist.php">Supprimer</a></li>
            </ul>
    </nav>

<div class="contener">
        <h1>Liste des taches</h1>
        <table>
        <thead>
            <th>Titre</th>
            <th>Description</th>
            <th>Date</th>
            <th>Priorité</th>
        </thead>
        <?php
          $handle = fopen("todolist.csv", "r");
          $paire =true;
          while($line = fgetcsv($handle))
          {
              if($paire)
              {
                echo '<tr class="paire">';
              }
              else
              {
                echo '<tr class="impaire">';
              }
              
              echo '<td class="titre">'.$line[0].'</td>';
              echo '<td class="desc">'.$line[1].'</td>';
              echo '<td class="date">'.substr($line[2],8,2).'/'.substr($line[2],5,2).'/'.substr($line[2],0,4).'</td>';
              if($line[3]=="1")
              {
                echo '<td class="prio">&uarr;&uarr;</td>';
              }
              elseif($line[3]=="2")
              {
                echo '<td class="prio">&uarr;</td>';
              }
              elseif($line[3]=="3")
              {
                echo '<td class="prio">&harr;</td>';
              }
              elseif($line[3]=="4")
              {
                echo '<td class="prio">&darr;</td>';
               
              }
              elseif($line[3]=="5")
              {
                echo '<td class="prio">&darr;&darr;</td>';
              }
              
              echo '</tr>';
              $paire=!$paire;
          }
          fclose($handle);
  
        ?>
        </table>
</div>
</body>
</html>