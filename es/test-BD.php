<?php
session_start();
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'topciment');
define("BASE_URL", "http://localhost/webMicro/es/test-BD"); // Eg. http://yourwebsite.com

$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$urlactual = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

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
$stm = $pdo->query("SELECT * FROM alternate");

$rows = $stm->fetchAll(PDO::FETCH_NUM);

foreach($rows as $row) {

    printf("$row[0]\n");
}
    
    }
    catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
	}

}
$db = getDB();

$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$urlactual = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

/* public function userDetails($uid)
     {
        try{
          $db = getDB();
          $stmt = $db->prepare("SELECT email,username,nombre,apellidos,telefono FROM users WHERE uid=:urlactual");  
          $stmt->bindParam("urlactual", $uid,PDO::PARAM_STRING);
          $stmt->execute();
          $data = $stmt->fetch(PDO::FETCH_OBJ);
          return $data;

         }
         catch(PDOException $e) {
          echo '{"error":{"text":'. $e->getMessage() .'}}'; 
          }

     } */

?>