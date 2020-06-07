<?php
$dsn = "mysql:host=localhost;port=3306;dbname=test2";
$user = "root";
$passwd = "";

//$pdo = new PDO($dsn, $user, $passwd);

try {
    $pdo = new PDO($dsn, $user, $passwd);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

//$stm = $pdo->query("SELECT * FROM `clients` ");

//*$tab = $stm->fetchAll();

/*foreach($tab as $ligne)
{
    echo print_r($ligne,true)."<br/>";
}*/
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stm = $pdo->query("SELECT * FROM `clients` ");
if(!$stm)
{
  echo 'Erreur requete SQL ';
}
else
{
    //var_dump($stm);
$tab = $stm->fetchAll();

foreach($tab as $ligne)
{
    echo print_r($ligne,true)."<br/>";
}
}
