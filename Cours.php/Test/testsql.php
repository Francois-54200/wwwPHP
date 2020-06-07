<?php
$dsn = "mysql:host=localhost;dbname=test";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->query("SELECT * FROM `utilisateurs` ");

$tab = $stm->fetchAll();

foreach($tab as $ligne)
{
    echo print_r($ligne,true)."<br/>";
}
