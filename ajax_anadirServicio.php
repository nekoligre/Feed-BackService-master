<?php

require_once(dirname(__FILE__) . "/connections/conexion.php");
echo 'holaaa';
if (isset($_POST['sectoresAñade']) && isset($_POST['serviciosAñade']) && isset($_POST['descripcionCortaAñade']) && isset($_POST['descripcionLargaAñade'])&& isset($_POST['idServicios'])) {

    $queryservicios = $db->prepare("select id_servicio, foto from servicios where nomservicio=?");
    $queryservicios->execute(array($_POST['serviciosAñade']));
    $idservicio = $queryservicios->fetch(PDO::FETCH_OBJ);


    $queryAñadir = $db->prepare("INSERT INTO ofrece  VALUES (?,?,?,?,?)");

    $resultadoAñadir = $queryAñadir->execute(array($_POST['idServicios'], $idservicio->id_servicio, $_POST['descripcionCortaAñade'], nl2br ($_POST['descripcionLargaAñade']), $id_sercvicio->foto));

    if ($resultado == 1) {
        echo ('siiiiiiiiiii');
        header("Location:index.php?p=home&error=10");
    } else {
        header("Location:index.php?p=home&error=11");
        echo 'noooooooo';
    }
} else {
    echo "Error";
    echo 'no';
}
?>

