<?php

$ObjetPDO = new PDO('mysql:host=localhost;dbname=mini_projet', 'Lucas', 'Maig-3399');

$PDOStat = $ObjetPDO->prepare('DELETE FROM `mouvements` WHERE id=:num LIMIT 1');

$PDOStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

var_dump($PDOStat);

$executeIsOk = $PDOStat->execute();

if($executeIsOk)
{
    $message = 'Le mouvement a bien étais suppimmer c: ';
}
else
{
    $message = 'Echec de la suppresion :x';
}
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width-device-width, user-scalable=no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie-edge">
    <title> Document </title>
    <link rel="stylesheet" href="Tuto_2.css">

</head>
<body>

    <h1> Suppresion mouvement </h1>

    <p><?= $message ?></p>

</body>
