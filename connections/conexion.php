<?php
	
$hostname = "localhost";
$database = "feedback";
$username = "root";
$password = "";

	try {
		$db = new PDO('mysql:dbname='.$database.';host='.$hostname, $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
	} catch( PDOException $e ) {
		echo "Error de conexión: " . $e->getMessage();
	}
	
	setlocale(LC_CTYPE,"es_ES");
	$query = $db->prepare("SET NAMES utf8");
	$query->execute();

?>
