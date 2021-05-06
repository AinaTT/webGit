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


<?php
/* session_start();

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ranking_kws');
define("BASE_URL", "http://localhost/ranking_kws/index.php"); 


function getDB() 
{
	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;
	try {
	$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbConnection->exec("set names utf8");
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbConnection;
    }
    catch (PDOException $e) {
        
    echo 'Connection failed: ' . $e->getMessage();
	}

}
$db = getDB(); */
?>

