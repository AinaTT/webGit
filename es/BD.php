<?php

$dsn = "mysql:host=localhost;dbname=topciment";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

$id = "https://www.topciment.com/en/new/6-reasons-why-microcement-bathrooms-will-be-a-trend-in-2021";

$stm = $pdo->prepare("SELECT * FROM alternate WHERE `en-GB` = :id");
$stm->bindParam(":id", $id, PDO::PARAM_INT);
$stm->execute();

$row = $stm->fetch(PDO::FETCH_ASSOC);

echo "Id: " . $row['es-ES'] . PHP_EOL;
echo "Name: " . $row['en-EN'] . PHP_EOL;
echo "Population: " . $row['population'] . PHP_EOL;
?>