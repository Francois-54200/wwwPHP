<?php
$ret = "";
$montab = ["coucouphp",'test','ecriture','ligne'];
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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajoute lignes</title>
</head>
<body>
    <h1><?php echo $ret ?></h1>
</body>
</html>