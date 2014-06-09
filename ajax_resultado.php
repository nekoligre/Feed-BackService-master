<?php

require_once(dirname(__FILE__) . "/connections/conexion.php");

$provincia = $_POST["provincia"];
$nomservicio = $_POST["servicio"];

$queryResultado = $db->prepare("
    select distinct u.id_usuario, u.alias, u.nombre, o.descripcionCorta as dcorta, o.descripcionLarga as dlarga, o.foto 
    from ofrece as o, usuarios as u ,servicios as s
    where o.id_usuario=u.id_usuario 
    and u.provincia=? 
    and  o.id_servicio=(select id_servicio
                        from servicios 
                        where nomservicio=?)");

$queryResultado->execute(array($provincia, $nomservicio));
$Resultado = $queryResultado->fetchAll(PDO::FETCH_OBJ);

//$queryResultado->rowCount() > 0

if (count($Resultado)>0) {

    foreach ($Resultado as $servicios) {
        echo "<br/>";
        echo "<img src=img/$servicios->foto>";
        echo "<p>alias:$servicios->alias</p>";
        echo "<p>nombre:$servicios->nombre</p>";
        echo "<p>Dcorta:$servicios->dcorta</p>";
        echo "<p>Dlarga:$servicios->dlarga</p>";
    }
} else {
    echo "no se han encontrado resultados";
    
}
?>
    