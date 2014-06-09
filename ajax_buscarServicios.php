<?php

require_once(dirname(__FILE__) . "/connections/conexion.php");

$sector = $_POST["sector"];
//hacemos query
$queryServicios = $db->prepare("SELECT nomservicio FROM servicios WHERE sector=?");
$queryServicios->execute(array($sector));
$listaSector = $queryServicios->fetchAll(PDO::FETCH_OBJ);

//con este array vemos los servicios en el desplegable
$arrayServicios[] = array();


foreach ($listaSector as $servicios) {


    array_push($arrayServicios, $servicios->nomservicio);
}

echo json_encode($arrayServicios);
?>

