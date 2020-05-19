<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiche CSV</title>
</head>
<body>
    
    <h1> Voici le contenu de notre fichier CSV </h1>
    <?php
        $handle = fopen("monfich.csv", "r");
        while($maligne = fgetcsv($handle )) {
        echo '<tr>';
        foreach($maligne as $unecell)
        {
            echo '<td>'.$unecell.'</td>';
        }
        echo '</tr>';
    }
    ?>
</body>
</html>